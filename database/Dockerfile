from mysql:latest

env MYSQL_PASSWORD='pass'
env MYSQL_USER='user'
env MYSQL_ALLOW_EMPTY_PASSWORD=yes

copy redlock-db.sql /docker-entrypoint-initdb.d/