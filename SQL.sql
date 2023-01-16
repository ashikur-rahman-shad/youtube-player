CREATE DATABASE youtube_player; 

USE youtube_player;

USE youtube_player;

CREATE TABLE users(
    id 		INT 		PRIMARY KEY AUTO_INCREMENT,
    name 	VARCHAR(20) NOT NULL,
    email 	VARCHAR(20) UNIQUE,
    pass 	VARCHAR(20) NOT NULL
);

CREATE TABLE players(
    id 			INT 		PRIMARY KEY AUTO_INCREMENT,
    streamkey	VARCHAR(20) NOT NULL UNIQUE,
    owner 		INT 		NOT NULL,
    incident	DATETIME	NOT NULL,
    vid_id		VARCHAR(20)	NOT NULL,
    duration	INT			NOT NULL,
    state		INT			NOT NULL
);
