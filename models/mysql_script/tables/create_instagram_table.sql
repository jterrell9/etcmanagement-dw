CREATE TABLE instagram(
	member_id SMALLINT UNSIGNED NOT NULL,
	instagram_name VARCHAR(40) NOT NULL,
	url VARCHAR(100),
	FOREIGN KEY(member_id) REFERENCES members
);