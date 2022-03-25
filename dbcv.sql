-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 25 mars 2022 à 07:12
-- Version du serveur : 5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbcv`
--

-- --------------------------------------------------------

--
-- Structure de la table `academique`
--

CREATE TABLE `academique` (
  `id` int(10) NOT NULL,
  `debut_aca` timestamp NULL DEFAULT NULL,
  `fin_acad` timestamp NULL DEFAULT NULL,
  `diplome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `idservice` int(11) NOT NULL,
  `idfontction` int(11) NOT NULL,
  `im` varchar(25) DEFAULT NULL,
  `cin` varchar(25) DEFAULT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `sexe` varchar(25) DEFAULT NULL,
  `datenaissance` date DEFAULT NULL,
  `dateadmin` date NOT NULL,
  `telephone` varchar(25) DEFAULT NULL,
  `adresse` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `idcorps` int(10) NOT NULL,
  `idgrade` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `idservice`, `idfontction`, `im`, `cin`, `nom`, `prenom`, `sexe`, `datenaissance`, `dateadmin`, `telephone`, `adresse`, `email`, `idcorps`, `idgrade`) VALUES
(1, 50, 63, '232 323', '111', 'deusieme test avec notify', 'DQSDQSDQDQDQD', NULL, '0000-00-00', '0000-00-00', '031 31 313 13', 'ddd', 'dddd.@gmail.com', 1, 1),
(2, 35, 3, '356 945', '325555', 'fgfgfgfg', 'fddf', NULL, '0000-00-00', '0000-00-00', '032 52 457 85', 'sqfsf', 'ianona.innocent@gmail.com', 42, 39),
(3, 4, 14, '325 625', '3231333232', 'Ianona', 'Iness', NULL, '0000-00-00', '0000-00-00', '032 56 898 98', 'Lot 127 Cité Mandroseza', 'iness@gmail.com', 41, 40),
(4, 50, 63, '352 263', '64c64646', 'Rakoto', 'Alphonse', NULL, '2022-03-15', '2022-03-06', '032 35 656 55', 'jqjqjfq', 'admin@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `agent_as_autre_format`
--

CREATE TABLE `agent_as_autre_format` (
  `id` int(10) NOT NULL,
  `id_agent` int(10) DEFAULT NULL,
  `id_autre_form` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `agent_as_competence`
--

CREATE TABLE `agent_as_competence` (
  `id` int(10) DEFAULT NULL,
  `id_agent` int(10) DEFAULT NULL,
  `id_competence` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `agent_as_exp`
--

CREATE TABLE `agent_as_exp` (
  `id` int(10) NOT NULL,
  `id_agent` int(10) DEFAULT NULL,
  `id_expe` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `agent_as_frm_acad`
--

CREATE TABLE `agent_as_frm_acad` (
  `id` int(10) NOT NULL,
  `id_agent` int(10) DEFAULT NULL,
  `id_acad` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `autres_formation`
--

CREATE TABLE `autres_formation` (
  `id` int(10) NOT NULL,
  `date_formation` timestamp NULL DEFAULT NULL,
  `attestation` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(10) NOT NULL,
  `categorie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `categorie`) VALUES
(1, 'I'),
(2, 'II'),
(3, 'III'),
(4, 'IV'),
(5, 'V'),
(6, 'VI'),
(8, 'VIII'),
(9, 'IX');

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` int(10) NOT NULL,
  `competence` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `corps`
--

CREATE TABLE `corps` (
  `id` int(10) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `libelle` varchar(100) DEFAULT NULL,
  `cadre` varchar(100) DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `corp_idt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `corps`
--

INSERT INTO `corps` (`id`, `code`, `categorie`, `libelle`, `cadre`, `category_id`, `corp_idt`) VALUES
(1, 'A73B', 'VIII', 'INGENIEURS DE LA NAVIGATION AERIENNE', 'A', 8, 0),
(2, 'A73C', 'IV', 'CONTROLEURS DE LA CIRCULATION AERIENNE', 'A', 4, 0),
(3, 'B73A', 'III', 'ADJOINTS TECHNIQUES DE LA NAVIGATION AERIENNE', 'B', 3, 0),
(4, 'C73A', 'II', 'AGENTS TECHNIQUES DE LA NAVIGATION AERIENNE', 'C', 2, 0),
(5, 'A75A', 'IX', 'INGENIEURS PRINCIPAUX ET EN CHEF DE LA METEOROLOGIE', 'A', 9, 0),
(6, 'A75B', 'VIII', 'INGENIEURS DE LA METEOROLOGIE', 'A', 8, 0),
(7, 'B75A', 'III', 'ADJOINTS TECHNIQUES DE LAMETEOROLOGIE', 'B', 3, 0),
(8, 'C75A', 'II', 'AGENTS TECHNIQUES DE LA METEOROLOGIE', 'C', 2, 0),
(9, 'A39A', 'VIII', 'INSPECTEURS DE LA MARINE MARCHANDE', 'A', 8, 0),
(10, 'A06A', 'VIII', 'ADMINISTRATEURS CIVILS', 'A', 8, 0),
(11, 'A06C', 'VI', 'ATTACHES D\'ADMINISTRATION', 'A', 6, 0),
(12, 'A06E', 'IV', 'ADJOINTS D\'ADMINISTRATION', 'A', 4, 0),
(13, 'B06A', 'III', 'ASSISTANTS D\'ADMINISTRATION', 'B', 3, 0),
(14, 'D06A', 'I', 'EMPLOYES D\'ADMINISTRATION', 'D', 1, 0),
(15, 'B00A', 'III', 'ADJOINTS DE SERVICE', 'B', 3, 0),
(16, 'C00A', 'II', 'ASSISTANTS DE SERVICE', 'C', 2, 0),
(17, 'D00A', 'I', 'EMPLOYES DE SERVICE', 'D', 1, 0),
(18, 'A70A', 'VIII', 'PLANIFICATEUR PRINCIPAL', 'A', 8, 0),
(19, 'A70B', 'VI', 'PLANIFICATEUR', 'A', 6, 0),
(20, 'A70C', 'V', 'ATTACHE DE PLANIFICATION', 'A', 5, 0),
(21, 'A18A', 'VIII', 'CONCEPTEURS', 'A', 8, 0),
(22, 'A18B', 'VI', 'REALISATEURS', 'A', 6, 0),
(23, 'A18D', 'V', 'REALISATEURS ADJOINTS', 'A', 5, 0),
(24, 'A18C', 'IV', 'TECHNICIENS SUPERIEURS', 'A', 4, 0),
(25, 'B18A', 'III', 'ENCADREURS', 'B', 3, 0),
(26, 'C18A', 'II', 'OPERATEURS', 'C', 2, 0),
(27, 'D18A', 'I', 'SOUS-OPERATEURS', 'D', 1, 0),
(28, 'D18A', 'I', 'GARDIENS DE PHARE', 'D', 1, 0),
(29, NULL, 'ELD', 'E L D 1', 'D', 1, 0),
(30, NULL, 'ELD', 'E L D 2', 'D', 1, 0),
(31, NULL, 'ELD', 'E L D 3 ', 'D', 1, 0),
(32, NULL, 'ELD', 'E L D 4', 'D', 1, 0),
(33, 'J08A', 'VIII', 'EFA Catégorie VIII', 'A', 8, 0),
(34, 'J06A', 'VI', 'EFA Catégorie VI', 'A', 6, 0),
(35, 'J05A', 'V', 'EFA Catégorie V', 'A', 5, 0),
(36, 'J04A', 'IV', 'EFA Catégorie IV', 'A', 4, 0),
(37, 'K00A', 'III', 'EFA Echelle IV', 'B', 3, 37),
(38, 'L00A', 'II', 'EFA Echelle III', 'C', 2, 38),
(39, 'M00B', 'I', 'EFA Echelle II', 'D', 1, 39),
(40, 'M00A', 'I', 'EFA Echelle I', 'D', 1, 40),
(41, 'B70A', 'IV', 'ADJOINT DE PLANIFICATION', 'A', 4, 0),
(42, 'A94I', 'IX', 'MEDECIN DIPLOME D\'ETAT', 'A', 9, 0),
(43, 'A94A', 'VIII', 'MEDECIN DIPLOME D\'ETAT', 'A', 8, 0);

-- --------------------------------------------------------

--
-- Structure de la table `direction`
--

CREATE TABLE `direction` (
  `id` int(11) NOT NULL,
  `abr` varchar(45) NOT NULL,
  `direction` varchar(255) DEFAULT NULL,
  `parentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `direction`
--

INSERT INTO `direction` (`id`, `abr`, `direction`, `parentId`) VALUES
(1, 'SG', 'SECRETAIRE GENERALE', 28),
(2, 'DGETP', 'Direction Générale de lEnseignement Technique et Professionnel ', 1),
(3, 'DG', '\r\nDirection Générale de la Formation Professionnelle ', 1),
(4, 'DCAQ', 'Direction des Curricula et de lAssurance Qualité  ', 2),
(5, 'DIP', 'Direction de lIngénierie Pédagogique', 2),
(6, 'DETP', 'Direction de lEnseignement Technique et Professionnel', 2),
(7, 'DEXAM', 'Direction des Examents ', 2),
(8, 'DERCP', 'Direction des Études et Recherches sur les Compétentes Professionnelle ', 3),
(9, 'DIFP', 'Direction de lIngénierie de la Formation Professionnelle ', 3),
(10, 'DFPQ', 'Direction de la Formation Professionnelle Qualifiante ', 3),
(11, 'DAMB', 'Direction de lApprentissage des Métiers de Base ', 3),
(14, 'CNFAR', 'Centre National de Formation professionnelle Agricole et Rurale ', 1),
(15, 'INPF', 'Institut National de Promotion de Formation ', 1),
(16, 'CNFPPSH', 'Centre National de Formation Professionnelle Personnes en Situation de Handicap ', 1),
(17, 'INfor', 'Institut National de Formation du Personnel des Établissements dETFP ', 1),
(18, 'DAF ', 'Direction de Affaire Financières ', 1),
(19, 'DPL ', 'Direction du Patrimoine et de la Logistique ', 1),
(20, 'DRH', 'Direction des Ressources Humaines ', 1),
(21, 'DSI', 'Direction du Système dInformation', 1),
(22, 'CGPP', 'Coordonnateur General des Programmes et des Projets ', 28),
(23, 'DPSE', 'Direction de Planification et Suivi Evaluation  ', 22),
(24, 'PRMP', 'Personne Responsable des Marchés Public ', 28),
(25, 'UCAI', 'Unité de contrôle Interne ', 28),
(26, 'CAB', 'Cabinet', 28),
(27, 'DREFTP', 'Directions Régionales de l’Enseignement Technique et de la Formation Professionnelle', 1),
(28, 'MIN', 'MINISTRE', 0);

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id` int(10) NOT NULL,
  `debut_exp` timestamp NULL DEFAULT NULL,
  `fin_exp` timestamp NULL DEFAULT NULL,
  `poste` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id`, `debut_exp`, `fin_exp`, `poste`) VALUES
(1, '2022-03-08 00:00:00', '2022-03-13 00:00:00', 'poste'),
(2, '2022-03-07 00:00:00', '2022-04-01 23:00:00', 'qsdqDd');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id` int(11) NOT NULL,
  `fonction` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`id`, `fonction`) VALUES
(1, 'Agent de Maintenance'),
(2, 'Agent de nettoyage'),
(3, 'Agent de Sécurité'),
(4, 'Agent de Suivi'),
(5, 'Agent recenseur'),
(6, 'Aide Comptable'),
(7, 'Aide Secrétaire'),
(8, 'Appui a l\'exploitation de Transport Routier'),
(9, 'Appui a l\'exploitation Marchandise'),
(10, 'Attaché de Presses non Permanent '),
(11, 'Attaché(e) de Direction'),
(12, 'Chargé de Mission non Permanent '),
(13, 'Chargée d\'Etudes'),
(14, 'Chargée d\'Etudes Environnementale'),
(15, 'Chargée d\'Etudes et Analyse'),
(16, 'Chauffeur'),
(17, 'Chauffeur - Mécanicien'),
(18, 'Chef de Bureau'),
(19, 'Chef de Division'),
(20, 'Chef de division technique'),
(21, 'Chef de Service '),
(22, 'Chef du Protocole '),
(23, 'Chef du Secrétariat Particulier'),
(24, 'Chef Standardiste'),
(25, 'Comptable'),
(26, 'Conseiller Technique non Permanent '),
(27, 'Coursier'),
(28, 'Délégué du MTM auprès du Trésor'),
(29, 'Dépositaire en Fourniture de Bureau'),
(30, 'Dépositaire en Fourniture et Matière'),
(31, 'Directeur'),
(32, 'Directeur de Cabinet'),
(33, 'Directeur Général '),
(34, 'Femme de ménage'),
(35, 'Gardien'),
(36, 'Gardien de Phare'),
(37, 'Inspecteurs'),
(38, 'Maintenance'),
(39, 'MINISTRE'),
(40, 'Ordonnateur Secondaire'),
(41, 'Personne Responsable des Marchés Publics'),
(42, 'Polycopiste'),
(43, 'Responsable Accord et Convention'),
(44, 'Responsable Base de Données '),
(45, 'Responsable de Législation de la Règlementation (SSR)'),
(46, 'Responsable du Personnel Central'),
(47, 'Responsable du Personnel Détaché /Base de Données'),
(48, 'Responsable du Personnel Régional /Base de Données'),
(49, 'Responsable du Service des normes '),
(50, 'Responsable ECD'),
(51, 'Responsable Technique des Projets'),
(52, 'Secrétaire'),
(53, 'Secrétaire de Direction'),
(54, 'Secrétaire Général'),
(55, 'Standardiste'),
(56, 'UGPM'),
(57, 'Vaguemestre'),
(58, 'Médecin'),
(59, 'Chargé du personnel EFA'),
(60, 'Responsable solde HEE'),
(61, 'Responsable corps Inspecteur des Domaines'),
(62, 'Responsable solde'),
(63, 'Agent actif');

-- --------------------------------------------------------

--
-- Structure de la table `grade`
--

CREATE TABLE `grade` (
  `id` int(10) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `grade` varchar(100) DEFAULT NULL,
  `corp_idt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `grade`
--

INSERT INTO `grade` (`id`, `code`, `grade`, `corp_idt`) VALUES
(1, 'A11E', 'Aux. Ech. I-1° Echelon', '40'),
(2, 'A12E', 'Aux. Ech I.-2°Echelon', '40'),
(3, 'A13E', 'Aux. Ech I.-3°Echelon', '40'),
(4, 'A14E', 'Aux. Ech I.-4°Echelon', '40'),
(5, 'A15E', 'Aux. Ech I.-5°Echelon', '40'),
(6, 'A16E', 'Aux. Ech I.-6°Echelon', '40'),
(7, 'A17E', 'Aux. Ech I.-7°Echelon', '40'),
(8, 'A18E', 'Aux. Ech I.-8°Echelon', '40'),
(9, 'A19E', 'Aux. Ech I.-9°Echelon', '40'),
(10, 'A21E', 'Aux. Ech. II-1° Echelon', '39'),
(11, 'A22E', 'Aux. Ech. II-2° Echelon', '39'),
(12, 'A23E', 'Aux. Ech. II-3° Echelon', '39'),
(13, 'A24E', 'Aux. Ech. II-4° Echelon', '39'),
(14, 'A25E', 'Aux. Ech. II-5° Echelon', '39'),
(15, 'A26E', 'Aux. Ech. II-6° Echelon', '39'),
(16, 'A27E', 'Aux. Ech. II-7° Echelon', '39'),
(17, 'A28E', 'Aux. Ech. II-8° Echelon', '39'),
(18, 'A29E', 'Aux. Ech. II-9° Echelon', '39'),
(19, 'A31E', 'Aux. Ech. III-1° Echelon', '38'),
(20, 'A32E', 'Aux. Ech. III-2° Echelon', '38'),
(21, 'A33E', 'Aux. Ech. III-3° Echelon', '38'),
(22, 'A34E', 'Aux. Ech III.-4°Echelon', '38'),
(23, 'A35E', 'Aux. Ech III.-5°Echelon', '38'),
(24, 'A36E', 'Aux. Ech III.-6°Echelon', '38'),
(25, 'A37E', 'Aux. Ech III.-7°Echelon', '38'),
(26, 'A38E', 'Aux. Ech III.-8°Echelon', '38'),
(27, 'A391', 'Aux. Ech III.-9°Echelon', '38'),
(28, 'A41E', 'Aux. Ech. IV-1° Echelon', '37'),
(29, 'A42E', 'Aux. Ech IV.-2°Echelon', '37'),
(30, 'A43E', 'Aux. Ech IV.-3°Echelon', '37'),
(31, 'A44E', 'Aux. Ech IV.-4°Echelon', '37'),
(32, 'A45E', 'Aux. Ech IV.-5°Echelon', '37'),
(33, 'A46E', 'Aux. Ech IV.-6°Echelon', '37'),
(34, 'A47E', 'Aux. Ech IV.-7°Echelon', '37'),
(35, 'A48E', 'Aux. Ech IV.-8°Echelon', '37'),
(36, 'A491', 'Aux. Ech IV.-9°Echelon', '37'),
(37, 'STOE', 'Stagiaire', '0'),
(38, '2C1E', '2°Classe-1°Echelon', '0'),
(39, '2C2E', '2°Classe-2°Echelon', '0'),
(40, '2C3E', '2°Classe-3°Echelon', '0'),
(41, '1C1E', '1°Classe-1°Echelon', '0'),
(42, '1C2E', '1°Classe-2°Echelon', '0'),
(43, '1C3E', '1°Classe-3°Echelon', '0'),
(44, 'PR1E', 'Principal-1°Echelon', '0'),
(45, 'PR2E', 'Principal-2°Echelon', '0'),
(46, 'PR3E', 'Principal-3°Echelon', '0'),
(47, 'EX1E', 'Exceptionnel-1°Echelon', '0'),
(48, 'EX2E', 'Exceptionnel-2°Echelon', '0');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idrole`, `role`) VALUES
(1, 'agent'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `abr` varchar(45) NOT NULL,
  `service` varchar(255) DEFAULT NULL,
  `direction_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `abr`, `service`, `direction_id`) VALUES
(1, 'SC', 'Service de la Communication', 1),
(2, 'SLDC', 'Service de la Législation, de la Documentation et du Contentieux', 1),
(3, 'SRI', 'Service des Relations Internationales', 1),
(4, 'SF', 'Service Financier', 18),
(5, 'SPRSB', 'Service de la Programmation et du Suivi Budgétaire', 18),
(6, 'SGC', 'Service de la Gestion des Carrières', 20),
(7, 'SS', 'Service de la Solde', 20),
(8, 'SMS', 'Service Médico-social', 20),
(9, 'SDS', 'Service du Domaine Scolaire', 19),
(10, 'SIME', 'Service des Infrastructures, Matériels et Equipements', 19),
(11, 'SCM', 'Service Central de Maintenance', 19),
(12, 'SMAR', 'Service de Maintenance et d’Administration du Réseau', 21),
(13, 'SDNL', 'Service de développement numérique et de logiciels', 21),
(14, 'SABD', 'Service de l’administration de la base de données', 21),
(15, 'SPRP', 'Service de Pilotage de la Réforme et du Partenariat', 25),
(16, 'SCP', 'Service de Coordination des projets', 24),
(17, 'SIDE', 'Service de l’Intégration de la Dimension Environnementale', 22),
(18, 'SEP', 'Service des Etudes - Planification', 23),
(19, 'SS', 'Service des Statistiques', 23),
(20, 'SSE', 'Service des Suivis - Évaluation', 23),
(21, 'SCRP', 'Service des Curricula et des Réformes Pédagogiques', 4),
(22, 'SSAQ', 'Service du Suivi et de l’Assurance Qualité', 4),
(23, 'SA', 'Service de l’Accréditation', 4),
(24, 'SAR', 'Service des études et recherches', 5),
(25, 'SPRP', 'Service de production des ressources pédagogiques', 5),
(26, 'SC', 'Service de capitalisation', 5),
(27, 'SFPI', 'Service de la Formation Professionnelle Initiale', 6),
(28, 'SET', 'Service de l’Enseignement Technique', 6),
(29, 'SSE', 'Service Suivi et Evaluation', 6),
(30, 'SOE', 'Service de l’Organisation des Examens', 7),
(31, 'SDC', 'Service des Diplômes et des Certificats', 7),
(32, 'SEARC', 'Service des Etudes et d’Analyses des Répertoires des Compétences', 8),
(33, 'SPQC', 'Service de la Prospection des Qualifications et des Compétences', 8),
(34, 'SBC', 'Service de Base des données sur les Compétences', 8),
(35, 'SEER', 'Service d’Etudes et d’Elaboration des Référentiels', 9),
(36, 'SEAFP', 'Service d’Evaluation des Acquis de la Formation Professionnelle', 9),
(37, 'SVAE', 'Service de Validation des Acquis de l’Expérience', 9),
(38, 'SFPQ', 'Service de la Formation Professionnelle Qualifiante', 10),
(39, 'SP', 'Service de Partenariat', 10),
(40, 'SSE', 'Service Suivi et Évaluation', 10),
(41, 'SAMB', 'Service de l’Apprentissage aux Métiers de Base', 11),
(42, 'SP', 'Service de Partenariat', 11),
(43, 'SSE', 'Service Suivi et Evaluation', 11),
(44, 'SEF', 'Service des Établissements et des Formations', 27),
(45, 'SIEC', 'Service des Ingénieries, des Examens et des Certifications', 27),
(46, 'SEC', 'Service des Études des Compétences', 27),
(47, 'SAAF', 'Service des Affaires Administratives et Financières', 27),
(48, 'SOAIP', 'Service d’Orientation et d’Appui à l’Insertion Professionnelle', 27),
(49, '-', '-', 2),
(50, '-', '-', 1),
(51, '-', '-', 3),
(52, '-', '-', 4),
(53, '-', '-', 5),
(54, '-', '-', 6),
(55, '-', '-', 7),
(56, '-', '-', 8),
(57, '-', '-', 9),
(58, '-', '-', 10),
(59, '-', '-', 11),
(60, '-', '-', 14),
(61, '-', '-', 15),
(62, '-', '-', 16),
(63, '-', '-', 17),
(64, '-', '-', 18),
(65, '-', '-', 19),
(66, '-', '-', 20),
(67, '-', '-', 21),
(68, '-', '-', 22),
(69, '-', '-', 23),
(70, '-', '-', 24),
(71, '-', '-', 25),
(72, '-', '-', 26),
(73, '-', '-', 27),
(74, '-', '-', 28);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `im` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `service_id` int(10) DEFAULT NULL,
  `idrole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `im`, `password`, `nom`, `prenom`, `service_id`, `idrole`) VALUES
(1, '371193', 'password', 'IANONA', 'Innocent', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `academique`
--
ALTER TABLE `academique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agent_as_autre_format`
--
ALTER TABLE `agent_as_autre_format`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_autre_form` (`id_autre_form`);

--
-- Index pour la table `agent_as_competence`
--
ALTER TABLE `agent_as_competence`
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_competence` (`id_competence`);

--
-- Index pour la table `agent_as_exp`
--
ALTER TABLE `agent_as_exp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_expe` (`id_expe`);

--
-- Index pour la table `agent_as_frm_acad`
--
ALTER TABLE `agent_as_frm_acad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_acad` (`id_acad`);

--
-- Index pour la table `autres_formation`
--
ALTER TABLE `autres_formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `corps`
--
ALTER TABLE `corps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `direction_id` (`direction_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `idrole` (`idrole`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `academique`
--
ALTER TABLE `academique`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `agent_as_autre_format`
--
ALTER TABLE `agent_as_autre_format`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `agent_as_exp`
--
ALTER TABLE `agent_as_exp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `autres_formation`
--
ALTER TABLE `autres_formation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `corps`
--
ALTER TABLE `corps`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `direction`
--
ALTER TABLE `direction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idrole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agent_as_autre_format`
--
ALTER TABLE `agent_as_autre_format`
  ADD CONSTRAINT `agent_as_autre_format_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agent_as_autre_format_ibfk_2` FOREIGN KEY (`id_autre_form`) REFERENCES `autres_formation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `agent_as_competence`
--
ALTER TABLE `agent_as_competence`
  ADD CONSTRAINT `agent_as_competence_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agent_as_competence_ibfk_2` FOREIGN KEY (`id_competence`) REFERENCES `competences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `agent_as_exp`
--
ALTER TABLE `agent_as_exp`
  ADD CONSTRAINT `agent_as_exp_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agent_as_exp_ibfk_2` FOREIGN KEY (`id_expe`) REFERENCES `experience` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `agent_as_frm_acad`
--
ALTER TABLE `agent_as_frm_acad`
  ADD CONSTRAINT `agent_as_frm_acad_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agent_as_frm_acad_ibfk_2` FOREIGN KEY (`id_acad`) REFERENCES `academique` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
