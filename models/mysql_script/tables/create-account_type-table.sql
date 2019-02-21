CREATE TABLE account_type(
	account_type_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	account_type VARCHAR(40) NOT NULL UNIQUE,
	PRIMARY KEY(account_type_id)
);