CREATE TABLE members(
	member_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	group_name VARCHAR(40) NOT NULL,
	fname VARCHAR(40) NOT NULL,
	lname VARCHAR(40) NOT NULL,
	email VARCHAR(60) NOT NULL UNIQUE,
	PRIMARY KEY(member_id)
);