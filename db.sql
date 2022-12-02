#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: TB_question
#------------------------------------------------------------

CREATE TABLE TB_question(
        id_question Int  Auto_increment  NOT NULL ,
        question    Varchar (1000) NOT NULL
	,CONSTRAINT TB_question_PK PRIMARY KEY (id_question)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TB_doc
#------------------------------------------------------------

CREATE TABLE TB_doc(
        id_doc        Int  Auto_increment  NOT NULL ,
        documentation Varchar (6000) NOT NULL ,
        lien          Varchar (6000) NOT NULL
	,CONSTRAINT TB_doc_PK PRIMARY KEY (id_doc)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TB_admin
#------------------------------------------------------------

CREATE TABLE TB_admin(
        id_admin Int  Auto_increment  NOT NULL ,
        login    Varchar (100) NOT NULL ,
        mdp      Varchar (1000) NOT NULL
	,CONSTRAINT TB_admin_PK PRIMARY KEY (id_admin)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TB_user
#------------------------------------------------------------

CREATE TABLE TB_user(
        id_user Int  Auto_increment  NOT NULL ,
        pseudo  Varchar (100) NOT NULL ,
        age     Int NOT NULL ,
        region  Varchar (10) NOT NULL
	,CONSTRAINT TB_user_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TB_game
#------------------------------------------------------------

CREATE TABLE TB_game(
        id_game            Int  Auto_increment  NOT NULL ,
        temps              Varchar (10) NOT NULL ,
        pourcentage_purete Int NOT NULL ,
        id_user            Int NOT NULL
	,CONSTRAINT TB_game_PK PRIMARY KEY (id_game)

	,CONSTRAINT TB_game_TB_user_FK FOREIGN KEY (id_user) REFERENCES TB_user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: AVOIR
#------------------------------------------------------------

CREATE TABLE AVOIR(
        id_doc      Int NOT NULL ,
        id_question Int NOT NULL
	,CONSTRAINT AVOIR_PK PRIMARY KEY (id_doc,id_question)

	,CONSTRAINT AVOIR_TB_doc_FK FOREIGN KEY (id_doc) REFERENCES TB_doc(id_doc)
	,CONSTRAINT AVOIR_TB_question0_FK FOREIGN KEY (id_question) REFERENCES TB_question(id_question)
)ENGINE=InnoDB;