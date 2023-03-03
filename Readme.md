# Skeleton de un entorno dockerizado para proyectos en Symfony

## Servicios

### Servidor NGINX
    imagen: nginx:1.17.8-alpine
### PHP 
    imagen: php:8.1-fpm-buster
### MYSQL
    imagen: mysql:8.0
### Rabbitmq
    imagen: mysql:8.0


Los proyectos se deben incluir dentro de la carpeta app

## Comandos para ejecutar los mensajes
```
 De forma sincrona: sf app:messenger:send-sync
```
```
 De forma asincrona: sf app:messenger:send-async
```
