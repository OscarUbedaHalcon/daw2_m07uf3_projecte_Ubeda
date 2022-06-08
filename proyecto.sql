use mysql;
create user 'root'@'localhost' identified by "Fjeclot22@";
create database proyecto;
use proyecto;
grant all privileges on proyecto.* to 'root'@'localhost';
