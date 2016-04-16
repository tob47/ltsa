DROP TABLE pengelola;

CREATE TABLE `pengelola` (
  `kode_pengelola` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(35) CHARACTER SET latin1 NOT NULL,
  `level` varchar(30) NOT NULL,
  PRIMARY KEY (`kode_pengelola`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO pengelola VALUES("1","admin","21232f297a57a5a743894a0e4a801fc3","super_admin");
INSERT INTO pengelola VALUES("2","eva","14bd76e02198410c078ab65227ea0794","admin");
INSERT INTO pengelola VALUES("5","imul","5ec8e69aa795aa3ba9d576b2101bb378","admin");



