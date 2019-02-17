CREATE TABLE purchaces(
	purchase_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	member_id SMALLINT UNSIGNED NOT NULL,
	services_id SMALLINT UNSIGNED NOT NULL,
	purchase_timestamp TIMESTAMP NOT NULL,
	PRIMARY KEY(purchase_id),
	FOREIGN KEY(member_id) REFERENCES members,
	FOREIGN KEY(services_id) REFERENCES services
);