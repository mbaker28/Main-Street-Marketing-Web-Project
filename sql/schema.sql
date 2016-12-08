CREATE TABLE IF NOT EXISTS links (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  url VARCHAR(255),
  code VARCHAR(12),
  created DATETIME,
  counter INT UNSIGNED NOT NULL DEFAULT '0'
)
ENGINE=InnoDB;
