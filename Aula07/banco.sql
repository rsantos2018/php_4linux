CREATE DATABASE aula07;
USE aula07;
CREATE TABLE posts(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, usuario_id INT NOT NULL, 
	post VARCHAR(140) NOT NULL, FOREIGN KEY (usuario_id) REFERENCES usuarios (usuario_id));

INSERT INTO usuarios (usuario, senha) VALUES ('reginaldo', '123');

SELECT * FROM usuarios;

SELECT * FROM usuarios where id = 2;

UPDATE usuarios SET senha = '123456' where usuario_id = 2;

DELETE from usuarios where usuario_id = 2;


SELECT * FROM usuarios WHERE usuario like 'jose%';

SELECT * FROM posts ORDER BY usuario_id DESC;

SELECT * FROM posts ORDER BY usuario_id DESC limit 2;

SELECT * FROM posts INNER JOIN usuarios ON posts.usuario_id = usuarios.usuario_id;

SELECT * FROM posts LEFT JOIN usuarios ON posts.usuario_id = usuarios.usuarios_id;

no terminal ctrl+shift+t

sudo apt update;

sudo apt install

sudo apt install php7.0-mysql

sudo service apache2 restart

MariaDB [aula07]> CREATE USER 'reginaldo'@'localhost' IDENTIFIED BY '@da6linux';
Query OK, 0 rows affected (0.07 sec)

MariaDB [aula07]> GRANT ALL PRIVILEGES ON *.* TO 'reginaldo'@'localhost';
Query OK, 0 rows affected (0.00 sec)