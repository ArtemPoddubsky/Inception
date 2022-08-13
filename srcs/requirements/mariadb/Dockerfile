FROM debian:buster

RUN apt-get update && apt-get upgrade -y &&\
	apt-get install mariadb-server -y

COPY ./tools .
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

CMD ./createdb.sh