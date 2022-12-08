--
-- Base de données :  `stone_ocean_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `datet` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `datet`) VALUES (1, 'Lina@gmail.com', 'passeLina', '2022-03-22 14:37:49');
INSERT INTO `user` (`id`, `email`, `password`, `datet`) VALUES (2, 'Edgar@gmail.com', 'passeEdgar', '2022-03-22 16:15:21');
INSERT INTO `user` (`id`, `email`, `password`, `datet`) VALUES (3, 'zorg@zorg', 'zaza', '2022-03-26 18:50:03');
COMMIT;