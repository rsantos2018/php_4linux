sudo apt update - Atualiza respositórios
sudo apt install postgresql - Instala Postgres

sudo su - Loga como root
su postgres - Loga como postgres
psql - Abre o postfreSql


CREATE DATABASE aula08
\l - lista banco de dados
q - sair

CREATE USER reginaldo PASSWORD '123' - criar usuario
\du - lista usuarios

ALTER DATABASE aula08 OWNER TO reginaldo - passa para o dono reginaldo

\q - sair do postgres

exit - sair do usuario postgres
exit -root

psql -h localhost -U reginaldo aula08 - entrando no banco postgres

\dt -lista tabela
======================================================
aula08=> CREATE TABLE usuarios(
aula08(> id SERIAL PRIMARY KEY,
aula08(> usuario VARCHAR(255) NOT NULL,
aula08(> senha VARCHAR(40) NOT NULL);
======================================================
aula08=> \d usuarios - mostra estrutura da tabela
======================================================
ALTER TABLE posts ALTER COLUMN usuario_id SET NOT NULL; - alterando coluna
ALTER TABLE tb_alunos ADD PRIMARY KEY (id); - adiciona 

======================================================
sudo apt update
sudo apt install php7.0-pgsql
sudo service apache2 restart
=====================================================
\d (nome da tabela) - mostra as colunas da tabela