CREATE DATABASE IF NOT EXISTS factorial;
USE factorial;
CREATE TABLE IF NOT EXISTS t_usuarios(
  usuario_nombre VARCHAR(45) NOT NULL, 
  usuario_paterno VARCHAR(45) NOT NULL, 
  usuario_materno VARCHAR(45) NOT NULL, 
  usuario_email VARCHAR(45) NOT NULL PRIMARY KEY, 
  usuario_password VARCHAR(16) NOT NULL
)ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS t_factorial(

  id_factorial INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  factorial TEXT NOT NULL,
  usuario_email VARCHAR (255) NOT NULL,
  proceso_factorial TEXT NOT NULL, 
  resultado_factorial TEXT NOT NULL
)ENGINE = InnoDB;

ALTER TABLE t_factorial ADD foreign key (usuario_email) references t_usuarios(usuario_email) ON DELETE CASCADE ON UPDATE CASCADE;
SELECT * FROM t_factorial WHERE usuario_email = 'ejemplo@gmail.com' ORDER BY id_factorial DESC LIMIT 10;