DROP TABLE INTERACTS;
DROP TABLE TAKES;
DROP TABLE SURVEY;
DROP TABLE USERS;
DROP TABLE COMMENTS;
DROP TABLE POSTS;
DROP TABLE RESPONSES;
DROP TABLE FORUM_CATEGORIES;
DROP TABLE QUESTIONS;

CREATE TABLE SURVEY (
Title char(50),
Length varchar(3),
Topic char(30),
Date_made TIMESTAMP,
PRIMARY KEY (Title));

CREATE TABLE USERS(
Username char(25),
Password char(25),
Length varchar(3),
fName char(30),
lName char(30),
PRIMARY KEY (Username));

CREATE TABLE FORUM_CATEGORIES (
Title char(50) PRIMARY KEY);

CREATE TABLE POSTS (
postAuthor char(25) UNIQUE,
postTime TIMESTAMP UNIQUE,
fTitle text REFERENCES FORUM_CATEGORIES (Title),
Data text NOT NULL,
Category char(30),
pDay TIMESTAMP,
pMonth TIMESTAMP,
PRIMARY KEY (postAuthor, postTime));

CREATE TABLE COMMENTS (
pAuthor char(25) REFERENCES POSTS (postAuthor) UNIQUE,
pTime TIMESTAMP REFERENCES POSTS (postTime) UNIQUE,
cAuthor char(30),
cTime TIMESTAMP,
cDay TIMESTAMP,
cMonth TIMESTAMP,
cData text,
PRIMARY KEY (cAuthor, cTime));

CREATE TABLE TAKES (
Username char(25) REFERENCES SURVEY(Title),
Survey_title char(50) REFERENCES SURVEY(Title),
PRIMARY KEY (Username, Survey_title));

CREATE TABLE INTERACTS(
fTitle char(30) REFERENCES FORUM_CATEGORIES (Title),
Username char(25) REFERENCES USERS (Username),
PRIMARY KEY (fTitle, Username));

CREATE TABLE QUESTIONS (    
qData char(200),
Survey_title char(50),
PRIMARY KEY (qData));

CREATE TABLE RESPONSES(
rAuthor char(30),
rTime TIMESTAMP,
qData text REFERENCES QUESTIONS (qData),
Answer_choice char(1),
rDay TIMESTAMP,
rMonth TIMESTAMP,
PRIMARY KEY (rAuthor, rTime));
