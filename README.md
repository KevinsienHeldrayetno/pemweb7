# pemweb7
Command SQL:
CREATE DATABASE tugasPemweb;
USE tugasPemweb;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE mahasiswa (
  nim bigint(10) NOT NULL,
  nama varchar(50) NOT NULL,
  prodi varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE mahasiswa
  ADD PRIMARY KEY (nim);

INSERT INTO mahasiswa (nama, nim, prodi)
VALUES ('Cocky', 202011, 'Teknik Informatika'),
('Amiya', 202012, 'Teknik Informatika'),
('Muelsyse', 202014, 'Teknik Elektro'),
('Mika', 202016, 'Teknik Elektro'),
('Azusa', 203011, 'Teknik Tambang'),
('Cement', 205011, 'Teknik Sipil');

COMMIT;
