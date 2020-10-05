#!/usr/bin/zsh bash
cd ..
export "$(grep -E -v '^#' .env | xargs)"
sudo mysql -uroot -e 'CREATE DATABASE nicapp_db;
CREATE USER `nicapp_user`@`localhost` IDENTIFIED BY "nicapp_pa$$w0rd";
GRANT ALL PRIVILEGES ON *.nicapp_db TO nicapp_user;
FLUSH PRIVILEGES;
'
echo '---DONE---'




