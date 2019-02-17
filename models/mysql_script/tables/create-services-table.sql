CREATE TABLE services(
	services_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	service_name VARCHAR(40) NOT NULL,
	service_price SMALLINT UNSIGNED DEFAULT NULL,
	payment_schedule_flag CHAR(1) DEFAULT NULL,
	PRIMARY KEY(services_id)
);