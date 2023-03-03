-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 03 mars 2023 à 03:37
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `poleculturel`
--

-- --------------------------------------------------------

--
-- Structure de la table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hexa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `configs`
--

CREATE TABLE `configs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `file` varchar(50) NOT NULL,
  `format` varchar(255) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `medias`
--

INSERT INTO `medias` (`id`, `name`, `type`, `file`, `format`, `post_id`, `user_id`) VALUES
(97, '', 'img', '17/img-3.jpg', '', 17, NULL),
(76, '', 'img', '17/img-2.jpg', '', 17, NULL),
(92, '', 'img', '1/img-1.jpg', '', 1, NULL),
(9, '', 'img', '2/img-1.jpg', '', 2, NULL),
(10, '', 'img', '2/img-2.jpg', '', 2, NULL),
(11, '', 'img', '2/img-3.jpg', '', 2, NULL),
(12, '', 'img', '3/img-1.jpg', '', 3, NULL),
(13, '', 'img', '3/img-3.jpg', '', 3, NULL),
(14, '', 'img', '3/img-2.jpg', '', 3, NULL),
(15, '', 'img', '4/img-1.jpg', '', 4, NULL),
(16, '', 'img', '4/img-2.jpg', '', 4, NULL),
(95, '', 'img', '4/img-3.jpg', '', 4, NULL),
(25, '', 'img', '5/img-3.jpg', '', 5, NULL),
(24, '', 'img', '5/img-2.jpg', '', 5, NULL),
(23, '', 'img', '5/img-1.jpg', '', 5, NULL),
(26, '', 'img', '6/img-1.jpg', '', 6, NULL),
(27, '', 'img', '6/img-2.jpg', '', 6, NULL),
(28, '', 'img', '6/img-3.jpg', '', 6, NULL),
(29, '', 'img', '7/img-1.jpg', '', 7, NULL),
(30, '', 'img', '7/img-2.jpg', '', 7, NULL),
(31, '', 'img', '7/img-3.jpg', '', 7, NULL),
(32, '', 'img', '8/img-1.jpg', '', 8, NULL),
(33, '', 'img', '8/img-2.jpg', '', 8, NULL),
(34, '', 'img', '8/img-3.jpg', '', 8, NULL),
(35, '', 'img', '9/img-1.jpg', '', 9, NULL),
(36, '', 'img', '9/img-2.jpg', '', 9, NULL),
(37, '', 'img', '9/img-3.jpg', '', 9, NULL),
(38, '', 'img', '10/img-1.jpg', '', 10, NULL),
(39, '', 'img', '10/img-2.jpg', '', 10, NULL),
(40, '', 'img', '10/img-3.jpg', '', 10, NULL),
(41, '', 'img', '11/img-1.jpg', '', 11, NULL),
(42, '', 'img', '11/img-2.jpg', '', 11, NULL),
(43, '', 'img', '11/img-3.jpg', '', 11, NULL),
(50, '', 'img', '12/img-2.jpg', '', 12, NULL),
(48, '', 'img', '1/img-2.jpg', '', 1, NULL),
(51, '', 'img', '12/img-3.jpg', '', 12, NULL),
(52, '', 'img', '13/img-1.jpg', '', 13, NULL),
(53, '', 'img', '13/img-2.jpg', '', 13, NULL),
(54, '', 'img', '13/img-3.jpg', '', 13, NULL),
(55, '', 'img', '14/img-1.jpg', '', 14, NULL),
(56, '', 'img', '14/img-2.jpg', '', 14, NULL),
(57, '', 'img', '14/img-3.jpg', '', 14, NULL),
(58, '', 'img', '15/img-1.jpg', '', 15, NULL),
(59, '', 'img', '15/img-2.jpg', '', 15, NULL),
(60, '', 'img', '15/img-3.jpg', '', 15, NULL),
(61, '', 'img', '16/img-1.jpg', '', 16, NULL),
(62, '', 'img', '16/img-2.jpg', '', 16, NULL),
(79, '', 'img', '18/img-1.jpg', '', 18, NULL),
(64, '', 'img', '17/img-1.jpg', '', 17, NULL),
(80, '', 'img', '18/img-2.jpg', '', 18, NULL),
(75, '', 'img', '12/img-1.jpg', '', 12, NULL),
(81, '', 'img', '18/img-3.jpg', '', 18, NULL),
(82, '', 'img', '19/img-1.jpg', '', 19, NULL),
(86, '', 'img', '19/img-2.jpg', '', 19, NULL),
(84, '', 'img', '19/img-3.jpg', '', 19, NULL),
(87, '', 'img', '20/img-1.jpg', '', 20, NULL),
(88, '', 'img', '20/img-2.jpg', '', 20, NULL),
(91, '', 'img', '20/img-3.jpg', '', 20, NULL),
(93, '', 'img', '1/img-3.jpg', '', 1, NULL),
(98, '', 'img', '16/img-3.jpg', '', 16, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `online` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `name`, `type`, `slug`, `online`, `user_id`) VALUES
(1, 'Spectacle Musical', 'Page', 'evenements/spectacle/', 1, NULL),
(2, 'Theâtre', 'Page', 'evenements/theatre/', 1, NULL),
(3, 'Magie', 'Page', 'evenements/magie/', 1, NULL),
(4, 'Chorale', 'Page', 'evenements/chorale/', 1, NULL),
(5, 'Cirque', 'Page', 'evenements/cirque/', 1, NULL),
(6, 'Comédie', 'Page', 'evenements/comedie/', 1, NULL),
(7, 'Autres Événments', 'Page', 'evenements/autres/', 1, NULL),
(8, 'Contact', 'Page', 'evenements/contact/', 1, NULL),
(9, 'Accueil', 'Page', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `comment` varchar(100) NOT NULL,
  `date` datetime DEFAULT NULL,
  `dateText` varchar(50) DEFAULT NULL,
  `heure` varchar(50) NOT NULL,
  `online` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `lieu` varchar(50) DEFAULT NULL,
  `prix` varchar(70) DEFAULT NULL,
  `youtube` varchar(150) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`, `comment`, `date`, `dateText`, `heure`, `online`, `type`, `slug`, `created`, `lieu`, `prix`, `youtube`, `user_id`) VALUES
(1, 'ZZAJ à ceux qui se ratent', '<p>Un studio de radio désuet et\r\ndécrépit, des instruments partout. C’est le début de l’émission musicale : « Voyage aux\r\nPays du Jazz ». Les présentateurs semblent paniqués\r\nquand ils se retournent : le\r\npatron a invité un public pour\r\nréaliser l’émission en direct.</p>\r\n<p>« Mais c’est impossible ! »\r\nEt pourtant c’est trop tard...\r\nNous voilà embarqués dans\r\nune virtuose déferlante de\r\nmusique et de maladresses.\r\nNous traversons l’histoire\r\ndu Jazz entre hallucinations\r\net réalité, du blues au funk\r\nen passant par le bebop.\r\nDans une symphonie d’instruments, ces passionnés inadaptés feront l’impossible\r\npour tenter de plaire : chanter, danser, jouer, donner.</p><p>\r\nDe quoi bien démarrer une\r\nnouvelle saison culturelle !</p>', 'Compagnie Le duo des cimes\r\nAvec Matthias Lauriot Prevost et\r\nAugustin Ledieu\r\nMise en scène : Sandr', '2022-10-06 20:30:00', 'Jeudi 6 Octobre 2022', '20h30', 1, 'spectacle', 'zzaj-a-ceux-qui-se-ratent', NULL, 'Espace Molière', 'Gratuit', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/XQpWVo1Leio\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(2, 'Mau D’âmour', '<p>Il y a beaucoup de similitudes troublantes qui unissent ces 2 femmes\r\npassionnées, mais il en est une\r\nqui est indéniable : leur voix.</p><p>\r\nIl y a 10 ans, Christel Kern croise\r\nle chemin de celui qui deviendra\r\nson ami et coach vocal : Richard\r\nCross. Hasard de la vie ? Pas certain. Il est également le docteur\r\nde l’âme de la chanteuse Maurane.\r\nIl y a parfois des coïncidences\r\ncomme des signes   : même professeur, même studio d’enregistrement à Bruxelles, mêmes blessures, mêmes MAUx et l’amour,\r\ntoujours l’amour. Une sorte de\r\nquête inaccessible comme le\r\nchantait si bien Brel, artiste\r\npréféré des deux chanteuses.\r\nCelle que l’on appelle familièrement Mau ou Mô porte admirablement son surnom. Ce surnom\r\nsera porté humblement à titre\r\nposthume par une autre artiste fragile qui dévoile ici tous les secrets\r\nde son âme telle une messagère.</p><p>\r\nDes mots qui, pour la première fois, ne sont pas les siens,\r\nmais ceux de Maurane et des\r\nauteurs qui auront sublimé\r\nune carrière bien trop courte.\r\nLe choix du trio féminin pour réinterpréter ce fabuleux répertoire est\r\nun symbole fort pour un hommage\r\npoignant à une grande dame qui\r\na tiré sa révérence le 7 mai 2018,\r\nalors que Christel mixait son dernier album à l’ICP Studio à Bruxelles,\r\nle studio de cœur de Maurane…\r\nEncore un hasard ?</p>', 'Chant et percussions : Christel Kern\r\nPiano et chœurs : Laura Strubel\r\nViolon électrique et chœurs :', '2023-01-15 20:30:00', 'Jeudi 15 Décembre 2022', '20h30', 1, 'spectacle', 'mau-d-amour', NULL, 'Espace Molière', 'Abonné 9 € - normal 15 € - Réduit 13 € - Jeune 9 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/6ypS6teGDbE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(3, 'Orchestre D\'Harmonie Luxeuil - Lure', '<p>Comme chaque année, l’Orchestre\r\nd’Harmonie de Luxeuil-les-Bains est fidèle\r\nà ses rendez-vous musicaux.</p><p> Les musiciens\r\nde l’Orchestre d’Harmonie de Lure se\r\njoignent à lui à Noël et au début de l’été\r\npour des programmes diversifiés : musiques symphoniques, de films, adaptations de\r\nchansons et de musiques du monde : les\r\ninstruments à vents et percussions ne\r\nmanquent pas de faire vibrer le public</p><p>En cas de mauvais temps, repli à la\r\nBasilique Saint Pierre.</p>', '', '2023-07-02 20:30:00', 'Dimanche 18 Décembre 2022 & Dimanche 2 Juillet 202', '20h30', 1, 'spectacle', 'orchestre-musical-luxeuil-lure', NULL, 'Parc Thermal', 'Gratuit', '', NULL),
(4, 'Adrien Dumont', '<p>Cela fait un bon moment qu’on\r\nle suit ce chanteur-là, dont la\r\nvoix va vous faire chavirer. Qui\r\ndit «  Découverte musicale au\r\nFrichet », pour vous sous-entend que nous l’avons déjà découvert auparavant.</p><p> Ce n’est\r\ndonc pas d’hier que la voix\r\nd’Adrien Dumont nous bouleverse, mais là, exilé depuis un\r\nan sur Lyon, il est en train de prendre son envol, en solo ou\r\navec son groupe Eskape, et\r\nil est temps pour nous de le\r\nprogrammer, avant qu’il ne devienne inaccessible.</p><p>\r\nOn ne peut que vous recommander chaudement de venir\r\nl’applaudir et applaudir ses\r\ncompositions qu’il mélange à\r\ndes reprises que tout le monde\r\npeut fredonner en rythme. Des reprises des Doors, de Cure, de\r\nTéléphone, de Dylan et de tant\r\nd’autres, alliées à une écriture\r\ndans la veine de ses idoles,\r\nvoilà la soirée Découverte\r\nqu’on vous propose cette année avec Adrien Dumont.</p><p>\r\nEt ce serait dommage de passer à côté !... </p>', 'Découverte Musicale au Frichet', '2023-03-11 20:30:00', 'Samedi 11 Mars 2023', '20h30', 1, 'spectacle', 'adrien-dumont', NULL, 'Espace Frichet', ' Unique 7 € - Gratuit pour les Abonnés', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/LFbGHoAb5-w\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(5, 'L\'Homme qui Plantait des Arbres', '<p>Hymne à la nature et à la vie,\r\n«  L’Homme qui plantait des\r\narbres  » est un véritable manifeste écologique pour notre XXIe\r\nsiècle.\r\nTrois musiciens sur scène (clarinette, marimba, accordéon)\r\ninterprètent des œuvres de\r\nBeethoven, Schubert et Ravel et\r\naccompagnent l’acteur (et le public) dans son voyage sur les pas\r\nd’Elzéar Bouffier, le berger planteur d’arbres. Le texte de Giono\r\net les musiques s’entrecroisent\r\net se nourrissent.</p><p> Les partitions\r\nau libre cheminement, à la rythmique ample et au développement mélodique long et souple,\r\nlaissent à l’imagination du spectateur toute latitude de voler vers\r\nles paysages sublimes de Giono ;\r\noutre l’aspect presque épique, le\r\nsouffle lyrique qu’elles peuvent\r\napporter au texte, c’est avant\r\ntout les capacités fantasmatiques\r\nde chacun, individuelles, intimes\r\nqu’elles peuvent convoquer et\r\nainsi décupler l’effet du roman\r\nsur le spectateur.</p><p> La parole de\r\nl’acteur et la musique tiennent\r\nlieu de scénographie à ce fabuleux roman écologique en un\r\nspectacle évocateur total !</p>', 'Compagnie CAPPELLA F\r\nLaurent Chouteau, acteur\r\nDamien Schulteiss, clarinette\r\nDenis Kracht-Noël, ma', '2023-03-23 20:30:00', 'Jeudi 23 Mars 2023', '20h30', 1, 'spectacle', 'l-homme-qui-plantait-des-arbres', NULL, 'Espace Molière', 'Abonné 7 € - normal 12 € - Réduit 10 € - Jeune 7 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/-gs-yV5i2RI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(6, 'Orchestre Saint-Colomban', '<p>Grand concert symphonique de\r\nmusiques de films (Ennio Morricone,\r\nNino Rota, Hans Zimmer, John Williams...).</p><p>Billetterie et renseignements\r\n> Denis GROSJEAN - 06 77 06 48 61\r\n denirojean@wanadoo.fr\r\n> Claude JOURDAN\r\n claudejourdan70200@laposte.net</p>', '', '2023-05-14 17:00:00', 'Dimanche 14 Mai 2023', '17h00', 1, 'spectacle', 'orchestre-st-colomban', NULL, 'Basilique Saint-Pierre', 'Unique 15 € - Gratuit pour les moins de 16 ans', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/1dN7xP7h7-o\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(7, 'Astrid Ou L\'Acerbe Comédie', '<p>Astrid, ou l’acerbe comédie, c’est l’OTNI de la saison,\r\n(Objet Théâtral Non Identifié)\r\nqu’il ne faut rater sous aucun prétexte, une épopée\r\nthéâtrale.</p><p> Astrid, c’est le prénom de l’aimée du fils du roi,\r\ncelle par qui le royaume se\r\nretrouve orphelin et pour qui\r\nl’héritier laisse le trône vacant.\r\nLe jeune Erell, fils du feu roi,\r\ndoit assurer la succession du\r\ntrône de son père. Éprouvant\r\nune profonde aversion pour son\r\ntitre, il brise les codes, nomme\r\nministre un marquis libertin,\r\ntient tête aux nobles de la cour,\r\nchange les lois ancestrales … et\r\nrêve de voyages et d’ailleurs...</p><p>\r\nAstrid, c’est un mélange entre\r\nun épisode oublié de l’histoire de France moyenâgeuse</p>\r\net de Game of Thrones.\r\nC’est l’occasion de voir\r\nsur scène 12 comédiens\r\nexpérimentés qui interprètent 52 personnages...\r\nUne pièce incroyablement bien\r\nécrite. Toute en alexandrins,\r\nmodernes et dépoussiérés !\r\n', 'Compagnie Les Métronomes infidèles\r\net\r\nMarilu Production\r\nécriture et mise en scène : Marc Tournebo', '2022-10-20 20:30:00', 'Jeudi 20 Octobre 2022', '20h30', 1, 'theatre', 'astrid-ou-l-acerbe-comedie', NULL, 'Espace Molière', 'Abonné 9 € - normal 15 € - Réduit 13 € - Jeune 9 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/xnUUQW7ZF_o\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(8, 'La Dame Céleste & Le Diable Délicat', '<p>Les histoires d’amour qui font fi\r\ndes âges et des générations ne\r\nsont pas l’apanage des fictions\r\net cette histoire en est la preuve.\r\nTirée du récit signé Claude-Alain\r\nPlanchon, l’adaptation théâtrale\r\nest signée Bérengère Dautun qui\r\ns’empare du rôle féminin avec\r\nferveur, mise en valeur par son\r\npartenaire.</p><p>\r\nDécembre 1982. Il a 34 ans, elle\r\nbouleversants de leur étonnante\r\ncollaboration et de cette incroyable ascension vers une célébrité dérisoire.\r\nDe leur première rencontre au\r\ndernier concert, Colorature nous\r\ninvite à partager l’incroyable\r\ndestin de deux personnages\r\nhors du commun terriblement attachants.\r\nPrès de 80 ans après sa disparition, la soprano qui chantait dien a 70. Il est jeune médecin, elle\r\nest une figure incontournable du\r\nmonde de la danse. Lors d’une\r\nsoirée de gala à l’opéra Garnier,\r\nleurs mains se frôlent… Elles ne\r\nse quitteront plus. De cette imprévisible rencontre naîtra un\r\namour singulier, absolu et merveilleux.</p><p>\r\nBérengère Dautun est une comédienne d’exception (prix de\r\nvinement faux reste un personnage culte qui a inspiré plusieurs\r\nadaptations cinématographiques.\r\nla meilleure comédienne du Off\r\nà Avignon en 2021 pour cette\r\npièce) qui peut se targuer de 34\r\nannées à la Comédie Française.\r\nSa présence seule est une invitation à ne pas rater ce spectacle\r\ndont la mise en scène, toute en\r\npudeur, est magnifiée par la scénographie et les lumières de Stéphane Baquet.</p>', 'De et avec Bérangère Dautun\r\nD’après le roman de Claude-Alain Planchon\r\nMise en scène : Stéphane Cot', '2023-02-09 20:30:00', 'Jeudi 9 Février 2023', '20h30', 1, 'theatre', 'la-dame-celeste', NULL, 'Espace Molière', 'Abonné 9 € - normal 15 € - Réduit 13 € - Jeune 9 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/GfEJxtI6sBM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(9, 'Colorature', '<p>New York 1930. Florence Foster\r\nJenkins, riche héritière américaine, s’improvise soprano colorature et massacre les plus fameux airs d’opéra autant par la\r\nfausseté de sa voix que par ses\r\nfantaisies rythmiques.\r\nDes années plus tard, au piano d’un club de jazz en vogue,\r\nCosme Mc Moon, son accompagnateur, nous fait revivre les\r\nsouvenirs à la fois hilarants et bouleversants de leur étonnante\r\ncollaboration et de cette incroyable ascension vers une célébrité dérisoire.</p><p>\r\nDe leur première rencontre au\r\ndernier concert, Colorature nous\r\ninvite à partager l’incroyable\r\ndestin de deux personnages\r\nhors du commun terriblement attachants.\r\nPrès de 80 ans après sa disparition, la soprano qui chantait divinement faux reste un personnage culte qui a inspiré plusieurs\r\nadaptations cinématographiques.</p>', 'Interprétation : Agnès Bove et Grégori Baquet, \r\nTexte français : Stéphane Laporte, \r\nMise en scène ', '2023-02-24 20:30:00', 'Vendredi 24 Février 2023', '20h30', 1, 'theatre', 'colorature', NULL, 'Auditorium de Lure', 'Abonné 8 € - normal 14 € - Réduit 10 € - Jeune 7 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/gPwZXSP1ACA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(10, 'Solar', '<p>Sur scène, un village au bord\r\nde la mer. S’y trouvent un bar,\r\nune boulangerie, des maisons,\r\nune petite place avec un banc,\r\nun lieu de vie et de rencontre.\r\nEt puis, il y a le facteur désespérément amoureux, le couple\r\nde boulangers en crise, la prostituée en déperdition, la vieille\r\ndame nostalgique…</p><p>\r\nVéritable tourbillon émotionnel,\r\nce spectacle de masques emporte le public dans le monde d’une mère confrontée à la disparition de son enfant. Comment\r\nréagir face au destin tragique\r\nde cette femme qui se prostitue\r\npour sauver son enfant, et qui,\r\nun soir, se retrouve face au landau vide ?</p><p> Un véritable dilemme\r\nface auquel SOLAR devra trouver la force et l’énergie pour survivre malgré tout.\r\nCe sont des histoires de vie que\r\nl’on devine, car pas une parole\r\nn’est prononcée tout au long du spectacle. Et pourtant, tout est\r\nclair. Chacun doit y trouver sa\r\nvérité, car en l’absence de mots,\r\nla place est grande pour l’imagination.\r\nUn spectacle tendre et dur à la\r\nfois, d’une grande délicatesse et\r\njoué avec finesse.</p><p>Accompagnée\r\npar une musique essentiellement\r\nlive, la pièce virevolte, tourbillonne et épingle les émotions sur\r\nle ciel des jours qui passent.', 'Compagnie UTOPIK FAMILY\r\nMise en scène : Stephan Lochau\r\nAvec : Florine Nemitz ou Coline Fassbind,\r\n', '2023-03-02 20:30:00', 'Jeudi 2 Mars 2023', '20h30', 1, 'theatre', 'solar', NULL, 'Espace Molière', 'Abonné 7 € - normal 12 € - Réduit 10 € - Jeune 7 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/hThDDDsIlnk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(11, 'Albert Einstein, Un Enfant à Part', '<p>Voici un spectacle fabuleux, pour\r\npetits et grands, avec des comédiennes et comédiens formidables. Et un spectacle rassurant\r\npour les cancres.</p><p> Car cancre, il\r\nl’était ce sacripant d’Einstein,\r\nsauf en maths bien sûr ! Son enfance fut celle d’un incompris,\r\ninadapté à l’école et mal-aimé de\r\nses professeurs mais heureusement entouré d’un amour familial\r\ngénéreux.</p><p>\r\nBien avant qu’il ne tire la langue\r\ndans un portrait célèbre qui orne\r\nles murs d’adolescents rebelles\r\nou de fans inconditionnels, ce\r\nprix Nobel de physique et père\r\nde la Physique Quantique, était\r\ndéjà un petit génie à l’esprit farceur, curieux de tout découvrir. Et l’équipe artistique qui s’est\r\nemparée avec bonheur et vigueur de ce spectacle, qui ne\r\ncesse d’être joué, est formidable.</p><p>\r\nDes comédiennes et comédiens\r\nà la metteure en scène, en passant par l’auteure et les adaptateurs, cet «Einstein…» est un vrai\r\nbonheur à ne pas rater !</p>', 'Mise en scène : Victoire Berger-Perrin\r\nAvec : Sylvia Roux, Tadrina Hocking et Thomas Lempire', '2023-04-06 20:30:00', 'Jeudi 6 Avril 2023', '20h30', 1, 'theatre', 'albert-einstein-un-enfant-a-part', NULL, 'Espace Molière', 'Abonné 9 € - normal 15 € - Réduit 13 € - Jeune 9 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/UjijRIC_Ri4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(12, 'Coming Out', '<p>De l’islam à sa conversion au catholicisme en passant par le protestantisme, Mehdi a fait de la\r\nquestion de Dieu une (en)quête\r\nobsédante.</p><p>\r\nDans ce seul en scène, qui sort\r\ndes sentiers battus et du politiquement correct, Mehdi revient\r\navec humour sur son étonnant\r\nparcours spirituel, mais aussi sur\r\nson enfance stéphanoise dans\r\nune famille d’origine algérienne,\r\nson expérience dans la délinquance, puis sa carrière de comédien formé à la Manufacture,\r\nHaute école de théâtre de Lausanne travaillant dans un milieu\r\nprogressiste et athée.</p><p>\r\nTout le monde en prend pour\r\nson grade dans cet exercice de\r\nstyle tonique et réconfortant, qui\r\nnous prouve qu’armé d’un bon\r\ntexte, on peut décidément rire\r\nde tout.</p>', 'Avec : Mehdi-Emmanuel Djaadi\r\nMise en scène : Thibaut Evrard', '2023-04-20 20:30:00', 'Jeudi 20 Avril 2023', '20h30', 1, 'theatre', 'coming-out', NULL, 'Espace Molière', 'Abonné 7 € - normal 12 € - Réduit 10 € - Jeune 7 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/1QYzw3H7I5U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(13, 'Fantasio', '<p>Fantasio, jeune homme en quête de\r\nsens qui traîne son mal de vivre et\r\nson oisiveté décadente, est poursuivi par des créanciers. Lorsque le\r\nfou du roi meurt, il en profite pour\r\nenfiler le costume du fou et se\r\ncamoufler au palais. Le prince de\r\nMantoue débarque alors dans la\r\ncité des Doges avec son valet pour\r\ny rencontrer sa future épouse, la\r\nfille du roi. Un échange de costume improbable et les conseils désabusés de Fantasio forment un\r\nimbroglio vénitien égayé d’intermèdes pop-rock joués en direct,\r\nentre soirée de carnaval et geôle\r\nvénitienne.</p><p>\r\nNous avions reçu avec bonheur en\r\noctobre 2019 la troupe de L’éternel\r\nété avec Les fourberies de Scapin\r\nqui nous avait enchantés par sa\r\nmodernité et sa qualité. On retrouve ici avec bonheur les mêmes\r\njeunes comédiens diablement\r\ndoués et novateurs.\r\nEntre romantisme et révolte, Fantasio pourrait être aujourd’hui le\r\nhéros d’une jeune génération qui\r\ncroit au pouvoir de ses actes et\r\nde l’engagement.</p><p> Avec une mise\r\nen scène dynamitée, un décor et\r\ndes costumes superbes, du rock\r\nromantique détonant et la fougue\r\nenthousiaste de la jeunesse, c’est\r\nà un vrai moment de bonheur\r\nthéâtral que l’on vous convie. \r\n', 'Mise en scène : Emmanuel Besnault\r\nAvec : Lionel Fournier, Benoit Gruel, Elisa Oriol,\r\nDeniz Türkmen', '2023-05-04 20:30:00', 'Jeudi 4 Mai 2023', '20h30', 1, 'theatre', 'fantasio', NULL, 'Espace Molière', 'Abonné 9 € - normal 15 € - Réduit 13 € - Jeune 9 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/qUuleEWMKvQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(14, 'La Mémoire du Temps', '<p>Après un peu plus de 700 représentations en France de son\r\ndernier spectacle « Drôlement\r\nmagique », ce spécialiste de\r\nl’insaisissable est de retour avec\r\nun tout nouveau spectacle, LA\r\nMEMOIRE DU TEMPS, qui sera\r\nson dernier grand tour de\r\npiste après 35 ans de carrière.</p><p>\r\nHaute en couleur, cette production innove et mise sur\r\nune magie poétique, touchante et humoristique, faisant vivre une expérience\r\ninteractive aux spectateurs.\r\nDans une ambiance envoûtante et énigmatique, Alain\r\nChoquette nous fait voyager\r\nau travers des époques et explore les frontières de l’imaginaire parmi des tableaux\r\nmagiques à couper le souffle.</p>\r\nC’est une invitation à vivre\r\npleinement l’instant présent en\r\nvous permettant de laisser une\r\nmarque indélébile dans votre\r\nmémoire et dans le temps !', 'Compagnie Alain Choquette', '2022-11-17 20:00:00', 'Jeudi 17 Novembre 2022', '20h30', 1, 'magie', 'la-memoire-du-temps', NULL, 'Espace Molière', 'Abonné 10 € - normal 16 € - Réduit 13 € - Jeune 8 ', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/Zucvrt1P2OA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(15, 'La Petite Fugue Chante Noël', '<p>Les choristes de la Petite Fugue, sous\r\nla direction d’Yves Martin, vous proposent un moment de partage et de\r\nfête avec les plus beaux chants de Noël.</p><p>Billetterie et renseignements :\r\n06 63 72 80 60 ou 06 73 73 09 44</p>', '', '2022-12-11 16:00:00', 'Dimanche 11 Décembre 2022', '20h30', 1, 'chorale', 'le-petite-fugue', NULL, 'Basilique Saint-Pierre', '5 € - GRATUIT POUR LES MOINS DE 16 ANS', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/Kugj0g0tJn0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(16, 'Choeur Micrologus', '<p>Dimanche 15 janvier 2023</p><p>\r\nPièce principale pour chœur et orchestre\r\nd’harmonie : la «Missa Brevis» de Jacob de\r\nHaan, compositeur néerlandais, qui compte\r\nparmi les compositeurs pour Orchestre à Vent\r\nles plus appréciés et les plus joués dans le\r\nmonde.\r\nCette œuvre, la «Missa Brevis» a été composée à l’occasion de la célébration du millénaire\r\ndu Pape Léon IX, en 2002 à Eguisheim.</p>\r\n<p>Dimanche 25 juin 2023</p>\r\n<p>Programme de printemps en cours de\r\nconstruction.</p>', '', '2023-06-25 17:00:00', 'Dimanche 15 Janvier 2023 & Dimanche 25 Juin 2023', '17h00', 1, 'chorale', 'choeur-micrologus', NULL, 'Basilique Saint-Pierre', 'Gratuit', '', NULL),
(17, 'Les Petits Touts', '<p>Que faire quand la solitude et l’ennui te gagnent ? Regarder autour\r\nde toi, juste à côté de toi, tout\r\nprès de toi... tu trouveras sans\r\ndoute un ami avec qui partager un\r\nmoment simple et rare ! Une fleur\r\npeut-être ?...</p><p> Fabien Coulon, circassien d’objets et mime, nous invite\r\nau travers de son regard à nous\r\némerveiller face aux petits riens à\r\ncôté desquels nous passons et qui\r\nfont des petits touts. Mais plus intérieurement, il crée un espace qui\r\nhéberge un imaginaire poétique et\r\nnous parle humblement... de la Vie !</p><p>\r\nDans sa cahute, sa cabane de curiosités, son île, ce naufragé solitaire échoué (volontaire ?) réalise\r\nde minuscules prouesses avec ce\r\nqui lui tombe sous la main, s’invente des compagnons de vie\r\npour lutter contre l’ennui et nous\r\nplonge au cœur de son petit\r\ncirque intérieur, peuplé de mirages\r\nde l’enfance, de joyeuses étrangetés et de rencontres incroyables...\r\nun cirque forain fait de touts et de\r\nriens pour épater les petitous!\r\nRegarde, juste là tout près, est-ce\r\nque tu vois la même chose que\r\nmoi ?</p><p>\r\nTout est question de point de vue !</p>\r\n', 'Fabien Coulon', '2022-12-22 16:00:00', 'Jeudi 22 Décembre 2022', '14h00', 1, 'cirque', 'les-petits-touts', NULL, 'Espace Molière', 'Abonné 4 € - normal 6 € - Réduit 5 € - Jeune 4 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/S1SkpuYVCy4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(18, 'Dîner de Famille', '<p>La comédie de boulevard\r\nqui tient ses promesses !</p>\r\n<p>Pour ses 30 ans, Alexandre\r\nsouhaite demander à ses parents d’être les témoins de\r\nson mariage… Or, son père,\r\nanimateur de télé parisien, et\r\nsa mère, femme au foyer provinciale, sont fâchés depuis\r\nsa naissance. Et pas qu’un\r\npeu ! Alexandre va utiliser de\r\nfaux prétextes pour les réunir... Le dîner de famille va-til totalement partir en vrille ?</p><p>\r\nA partir d’un pitch relativement\r\nsimple, l’occasion est donnée\r\naux auteurs de faire vivre une\r\nlangue fleurie et hilarante. Une\r\npièce qui se joue à Paris depuis des lustres et donne au\r\npublic sa dose de bonne humeur, celle dont on a parfois\r\ntellement besoin.</p><p> Chaque soir,\r\ndes salles qui rient aux éclats\r\net applaudissent à tout rompre\r\ndes comédiens qui visiblement\r\nprennent un malin plaisir à jouer\r\nces personnages hauts en couleurs, ça ne peut laisser indifférent et on a hâte d’assister en\r\nvoyeurs à ce dîner de famille où\r\non vous convie avec bonheur.</p>', 'ADA Productions et l’AS Baltringues\r\nAuteur : Joseph Gallet, Pascal Rocher\r\nArtistes : Joseph Gallet', '2022-12-01 20:30:00', 'Jeudi 1er Décembre 2022', '20h30', 1, 'comedie', 'diner-de-famille', NULL, 'Espace Molière', 'Abonné 20 € - normal 25 € - Réduit 22 € - Jeune 20 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/TIG7FbYg1sI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(19, 'Le Switch', '<p>Après plus de dix ans, Line et\r\nLise découvrent que Philippe\r\nest le mari de l’une et l’amant\r\nde l’autre. Elles en parlent toutes\r\nles deux dans un réflexe de solidarité féminine et décident ensemble de lui faire comprendre\r\nqu’il n’a plus à choisir puisqu’elles\r\nveulent le quitter. Mais avant de\r\nse séparer de leur mari et amant,\r\ndésireuses de découvrir ce qu’il\r\npeut bien offrir à l’autre qu’elles\r\nn’ont pas, elles décident d’exiger ces faveurs inconnues.</p><p>\r\nVoici Philippe contraint d’effectuer un Switch pour les satisfaire. Mais ce que peut supporter une femme ne convient pas\r\nforcément à une maîtresse et\r\nles ardeurs consacrées à une\r\nmaîtresse peuvent devenir un\r\nfardeau pour une femme. C’est\r\nl’expérience harassante qu’elles\r\nvont subir toutes les deux avec\r\nla volonté farouche de Philippe\r\nde garder l’une et l’autre. Mais\r\ncette expérience n’a qu’un\r\ntemps et après être revenues à\r\nla raison, elles décident chacune\r\nde reprendre leur place au plus\r\ngrand soulagement de Philippe\r\nqui pense avoir gagné la partie…\r\nSans le savoir il se prépare à des\r\njours difficiles !</p>', 'Une comédie de Marc Fayet\r\nMise en scène : Luc Hamett\r\nArtistes : Alexandre Pesle, Capucine\r\nAnav, E', '2023-01-26 20:30:00', 'Jeudi 26 Janvier 2023', '20h30', 1, 'comedie', 'le-switch', NULL, 'Espace Molière', 'Abonné 20 € - normal 25 € - Réduit 22 € - Jeune 20 €', '<iframe width=\"450\" height=\"300\" src=\"https://www.youtube.com/embed/h0fuACJR-sY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; au', NULL),
(20, 'Pièce en Plastique', '<p>Voilà de l’humour qui décape  !\r\nUne comédie grinçante sur\r\nnotre société vue par Marius van\r\nMayenburg qui nous entraîne\r\nmalgré nous à rire de nous.</p><p>\r\nSoit un couple CSP+ (de catégorie socio-professionnelle des\r\nplus favorisées), financièrement\r\nà l’aise. Elle se pique d’art et fait\r\ndes gorges chaudes d’un artiste plasticien (par ailleurs doté\r\nd’une plastique agréable… cela\r\nest-il vraiment un détail négligeable ?), s’achetant ainsi une\r\nbonne conscience en faveur de\r\nla défense de l’art. Lui, plus primate, se sent attiré par la bonne,\r\npardon l’aide de ménage (par\r\nailleurs plutôt bien roulée… mais\r\nn’est-ce pas contre-nature cette\r\nattirance pour le bas peuple ?),\r\nque le couple vient d’embaucher\r\nafin de s’occuper de leur enfant\r\nun peu obèse et obsédé…</p><p>\r\nLa pièce se passe dans le salon\r\nde leur appartement cossu. L’enfant sur sa console se console\r\ndu désintérêt de ses parents en\r\ns’empiffrant de bonbons. Est-ce\r\nvraiment de la fiction ? L’artiste,\r\nquant à lui, a des idées (forcément) géniales et culottées, à\r\ndéfaut d’être sincères, et se pose\r\nun peu en Tartuffe moderne à la\r\nrecherche d’une muse.</p><p>\r\nUne comédie moderne et\r\ncontemporaine à prendre au second degré pour rire (jaune) au premier degré.</p>\r\n', 'Mise en scène : Alain Popineau\r\nAvec : Yvon Auguste, Constance Grou-Radenez,\r\nCharles Morillon, Juli', '2023-06-01 20:30:00', 'Jeudi 1er Juin 2023', '20h30', 1, 'comedie', 'piece-en-plastique', NULL, 'Espace Molière', 'Abonné 9 € - normal 15 € - Réduit 13 € - Jeune 9 €', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_configs_users1_idx` (`user_id`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_média_posts_idx` (`post_id`),
  ADD KEY `fk_média_users1_idx` (`user_id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pages_users1_idx` (`user_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posts_users1_idx` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
