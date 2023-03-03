<?php

class Form{

    public $controller;
    public $errors;

    public function __construct($controller){
        $this->controller = $controller; // Enregistre le contrôleur actuel
    }

    public function input($name, $label, $options = array()){
        $error = false; // Définit la variable d'erreur à false
        $classError = ''; // Initialise la classe d'erreur à une chaîne vide
        if(isset($this->errors[$name])){
            $error = $this->errors[$name]; // Si une erreur est associée à ce champ, la récupère
            $classError = ' error'; // Ajoute la classe d'erreur au champ
        }
        if(!isset($this->controller->request->data->$name)){
            $value = ''; // Si aucune donnée n'a été soumise pour ce champ, le met à une chaîne vide
        }else{
            $value = $this->controller->request->data->$name; // Récupère la valeur de ce champ
        }
        if($label == 'hidden'){ // Si le type de champ est "hidden", retourne une balise input de type hidden
            return '<input type="hidden" name="'.$name.'" value="'.$value.'">';
        }
        $html = '<div class="champs'.$classError.'">
            <label for="input'.$name.'">'.$label.'</label>'; // Crée la structure HTML du champ, avec son libellé
        $attr = ' '; // Initialise les attributs HTML à une chaîne vide
        foreach($options as $k => $v){ // Parcourt les options du champ
            if($k != 'type'){ // Si l'option n'est pas "type"
                $attr .= " $k=\"$v\""; // Ajoute l'option sous forme d'attribut HTML
            }
        }
        if(!isset($options['type'])){ // Si le type de champ n'est pas défini, crée un champ de type texte
            $html .='<input class="input" type="text" id="input'.$name.'" name="'.$name.'" value="'.$value.'" '.$attr.'>';
        }elseif($options['type'] == 'textarea'){ // Si le type de champ est textarea, crée un champ textarea
            $html .='<textarea id="input'.$name.'" name="'.$name.'" '.$attr.'>'.$value.'</textarea>';
        }elseif($options['type'] == 'checkbox'){ // Si le type de champ est checkbox, crée un champ checkbox
            $html .='<input type="hidden" name="'.$name.'" value="0"><input type="checkbox" name="'.$name.'" value="1" '.(empty($value)?'':'checked').'>';
        }elseif($options['type'] == 'file'){ // Si le type de champ est file, crée un champ de type fichier
            $html .='<input type="file" name="'.$name.'" '.$attr.'>';
        }elseif($options['type'] == 'password'){ // Si le type de champ est password, crée un champ de type mot de passe
            $html .='<input type="password" id="input'.$name.'" name="'.$name.'" value="'.$value.'" '.$attr.'>';
        }
        if($error){ // Si une erreur est associée à ce champ, l'ajoute au champ
            $html .= '<span>'.$error.'</span>';
        }
    $html .= '</div>';
    return $html;
    }
}