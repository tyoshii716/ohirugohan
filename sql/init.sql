DROP DATABASE IF EXISTS ohirugohan;
CREATE DATABASE ohirugohan;

use ohirugohan;

CREATE TABLE META (
    Id        INTEGER UNSIGNED PRIMARY KEY,
    Name      VARCHAR(128),
    Path      VARCHAR(128),
    Storage   VARCHAR(64),
    IsDelete  ENUM('y', 'n') DEFAULT 'n', 
    UpdatedAt DATETIME 
) ENGINE=InnoDB;

CREATE TABLE STORAGE (
    Id   INTEGER UNSIGNED PRIMARY KEY,
    Name VARCHAR(64)
) ENGINE=InnoDB;
