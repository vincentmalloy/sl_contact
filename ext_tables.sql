CREATE TABLE tx_slcontact_domain_model_contactrequest (
	name varchar(255) NOT NULL DEFAULT '',
	email varchar(255) NOT NULL DEFAULT '',
	message text NOT NULL DEFAULT '',
	consent_given smallint(1) unsigned NOT NULL DEFAULT '0'
);
