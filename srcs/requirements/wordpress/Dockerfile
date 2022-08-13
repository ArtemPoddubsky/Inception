FROM debian:buster

RUN apt-get update && apt-get upgrade -y &&\
	apt-get -y install curl php7.3 php-mysql php-redis php-fpm mariadb-client &&\
	curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar &&\
	chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp-cli &&\
	mkdir -p /run/php/
	

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./conf/wp-config.php /var/www/wordpress/
COPY ./tools/init.sh /var/www/wordpress/

ENTRYPOINT ["bash", "/var/www/wordpress/init.sh"]