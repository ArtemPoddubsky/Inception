FROM debian:buster

RUN apt-get update && apt-get upgrade -y &&\
	apt-get install nginx openssl -y &&\
	openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=RU/ST=Moscow/L=Moscow/O=School21/OU=Lholdo/CN=lholdo.42.fr/emailAddress=dubtem@gmail.com" &&\
	chmod -R 775 /var/www/html

COPY ./conf/default /etc/nginx/conf.d/default.conf

ENTRYPOINT [ "nginx", "-g", "daemon off;" ]