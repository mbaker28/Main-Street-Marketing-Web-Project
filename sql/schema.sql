CREATE TABLE IF NOT EXISTS links (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  url VARCHAR(255),
  code VARCHAR(12),
  count INT UNSIGNED NOT NULL DEFAULT '0',
  created DATETIME
)
ENGINE=InnoDB;
