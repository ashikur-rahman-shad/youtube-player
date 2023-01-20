--SQL Initialized database

CREATE DATABASE IF NOT EXISTS youtube_player; 

USE youtube_player;

CREATE TABLE IF NOT EXISTS users(
    id 		INT 		PRIMARY KEY AUTO_INCREMENT,
    name 	VARCHAR(20) NOT NULL,
    email 	VARCHAR(20) UNIQUE,
    pass 	VARCHAR(20) NOT NULL
);

CREATE TABLE IF NOT EXISTS players(
    id 			INT 		PRIMARY KEY AUTO_INCREMENT,
    streamkey	VARCHAR(50) NOT NULL UNIQUE,
    owner 		INT 		NOT NULL,
    incident	DATETIME	NOT NULL DEFAULT CURRENT_TIMESTAMP,
    vid_id		VARCHAR(20)	NOT NULL DEFAULT 'PEwJ9VIlNgM',
    duration	INT			NOT NULL DEFAULT 0,
    state		INT			NOT NULL DEFAULT 1,
    FOREIGN KEY (owner) REFERENCES users(id) 
);


--SQL to create account 

INSERT INTO users(name, email, pass)
VALUE('Name','Email','Password');

--SQL to get streamkey

SELECT streamkey FROM players WHERE owner=13


--SQL to create a player instance

INSERT INTO players
(streamkey, owner) VALUES 
('Stream key', '1');


--SQL to update player instance

UPDATE players 
SET 
incident = CURRENT_TIMESTAMP, 
vid_id = 'videoid', duration = 15, state = 2 
WHERE streamkey = 'Stream key';
