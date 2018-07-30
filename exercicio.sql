# MySQL-Front Dump 2.5
#
# Host: localhost   Database: exercicio
# --------------------------------------------------------
# Server version 5.0.41-community-nt


#
# Table structure for table 'pessoa'
#

CREATE TABLE IF NOT EXISTS pessoa (
  id int(3) unsigned NOT NULL auto_increment,
  nome varchar(80) NOT NULL DEFAULT '' ,
  PRIMARY KEY (id)
);



#
# Dumping data for table 'pessoa'
#

INSERT INTO pessoa VALUES("1", "Victor");
