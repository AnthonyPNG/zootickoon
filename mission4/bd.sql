--
-- Base de données :  `stone_ocean_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datet` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login` varchar(50) NOT NULL,
  `subjet` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `prio` varchar(10) NOT NULL DEFAULT 'low',
  `sector` varchar(30) NOT NULL,
  `statut` varchar(10) NOT NULL DEFAULT 'ongoing',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id`, `datet`, `login`, `subjet`, `description`, `prio`, `sector`, `statut`) VALUES
(1, '2020-07-30 14:37:49', 'zorg@zorg', 'water leak', 'water leak in jellyfish aquarium', 'low', 'jellyfish zone', 'ongoing');
COMMIT;
