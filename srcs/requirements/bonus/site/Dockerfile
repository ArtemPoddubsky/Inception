FROM debian:buster

RUN apt-get update && apt-get upgrade -y &&\
	apt-get install nginx openssl -y &&\
	mkdir -p /var/run/nginx /var/www/site/

COPY ./conf/default /etc/nginx/sites-enabled/default
COPY ./site/ /var/www/site

RUN chmod -R 775 /var/www/site/
ENTRYPOINT [ "nginx", "-g", "daemon off;" ]
