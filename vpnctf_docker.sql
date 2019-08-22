
-- Table structure for table `vpnctf_docker`

DROP TABLE IF EXISTS `vpnctf_docker`;
CREATE TABLE IF NOT EXISTS `vpnctf_docker` (
  `dockerID` int(10) NOT NULL auto_increment,
  `dockerString` varchar(100) default NULL,
  `dockerNotes` varchar(100) default NULL,
  KEY `dockerID` (`dockerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;

-- Insert data for table `vpnctf_docker`

INSERT INTO `vpnctf_docker` (`dockerID`, `dockerString`, `dockerNotes`) VALUES ('1', 'vulnerables/phpldapadmin-remote-dump', 'phpLdapAdmin is a Web-based LDAP browser to manage your LDAP server in its last version has a remote');