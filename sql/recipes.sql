DROP TABLE IF EXISTS recipes;
CREATE TABLE recipes
(
  id              smallint unsigned NOT NULL auto_increment,
  publicationDate date NOT NULL,
  title           varchar(255) NOT NULL,
  summary         text NOT NULL,
  content         mediumtext NOT NULL,
  ingredients     text NOT NULL,
  imageExtension  varchar(255) NOT NULL,

  PRIMARY KEY     (id)
);