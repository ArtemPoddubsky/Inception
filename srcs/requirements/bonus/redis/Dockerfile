FROM debian:buster

RUN apt-get update &&\
	apt-get upgrade -y &&\
	apt-get -y install redis php-redis &&\
	sed -i 's!bind 127.0.0.1 ::1!bind 127.0.0.1:6379 !g' /etc/redis/redis.conf &&\
	echo "maxmemory 128mb\nmaxmemory-policy allkeys-lru" >> /etc/redis/redis.conf

ENTRYPOINT redis-server --protected-mode no