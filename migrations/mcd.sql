#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

CREATE TABLE TD_UTILISATEURS(
        ID       Int  Auto_increment  NOT NULL ,
        NOM      Varchar (50) NOT NULL ,
        PRENOM   Varchar (50) NOT NULL ,
        PASSWORD Varchar (255) NOT NULL ,
        EMAIL    Varchar (80) NOT NULL
	,CONSTRAINT TD_UTILISATEURS_AK UNIQUE (EMAIL)
	,CONSTRAINT TD_UTILISATEURS_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE TD_CATEGORIES(
        ID  Int  Auto_increment  NOT NULL ,
        NOM Varchar (250) NOT NULL
	,CONSTRAINT TD_CATEGORIES_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: priorite
#------------------------------------------------------------

CREATE TABLE TD_PRIORITE(
        ID  Int  Auto_increment  NOT NULL ,
        NOM Varchar (250) NOT NULL
	,CONSTRAINT TD_PRIORITE_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: taches
#------------------------------------------------------------

CREATE TABLE TD_TACHES(
        ID              Int  Auto_increment  NOT NULL ,
        NOM             Varchar (250) NOT NULL ,
        DESCRIPTION     Varchar (250) NOT NULL ,
        DATE            Date NOT NULL ,
        ID_UTILISATEURS Int NOT NULL ,
        ID_PRIORITE     Int NOT NULL
	,CONSTRAINT TD_TACHES_PK PRIMARY KEY (ID)

	,CONSTRAINT TD_TACHES_TD_UTILISATEURS_FK FOREIGN KEY (ID_UTILISATEURS) REFERENCES TD_UTILISATEURS(ID)
	,CONSTRAINT TD_TACHES_TD_PRIORITE0_FK FOREIGN KEY (ID_PRIORITE) REFERENCES TD_PRIORITE(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: appartenir
#------------------------------------------------------------

CREATE TABLE TD_APPARTENIR(
        ID_TACHES            Int NOT NULL ,
        ID_CATEGORIES Int NOT NULL
	,CONSTRAINT APPARTENIR_PK PRIMARY KEY (ID_TACHES,ID_CATEGORIES)

	,CONSTRAINT APPARTENIR_TD_TACHES_FK FOREIGN KEY (ID_TACHES) REFERENCES TD_TACHES(ID)
	,CONSTRAINT APPARTENIR_TD_CATEGORIES0_FK FOREIGN KEY (ID_CATEGORIES) REFERENCES TD_CATEGORIES(ID)
)ENGINE=InnoDB;

