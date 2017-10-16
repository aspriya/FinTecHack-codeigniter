CREATE DATABASE fintechhack;

USE fintechhack;

CREATE TABLE groups (
	group_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100),
	university VARCHAR(255),
	members TINYINT(1),
	idea_title VARCHAR(255),
	idea_description TEXT,
	terms_accept TINYINT(1),
	update_at TIMESTAMP
);

CREATE TABLE members (
	member_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	university_id VARCHAR(100),
	contact_no VARCHAR(15),
	email VARCHAR(255),
	veg_non_veg VARCHAR(10),
	tshirt VARCHAR(10),
	leader TINYINT(1),
	group_id INT,
	FOREIGN KEY (group_id) REFERENCES groups(group_id)
);

CREATE TABLE auth_tokens (
	ref_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	auth_token VARCHAR(100),
	completed TINYINT(1),
	update_at TIMESTAMP
);
