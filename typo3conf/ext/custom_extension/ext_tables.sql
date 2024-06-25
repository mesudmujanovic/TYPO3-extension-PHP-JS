CREATE TABLE tx_customextension_domain_model_custom (
        uid int(11) NOT NULL AUTO_INCREMENT,
        pid int(11) NOT NULL DEFAULT '0',
        name varchar(255) NOT NULL DEFAULT '',
        job varchar(255) NOT NULL DEFAULT '',
        hobby varchar(255) NOT NULL DEFAULT '',
        PRIMARY KEY (uid)
);
