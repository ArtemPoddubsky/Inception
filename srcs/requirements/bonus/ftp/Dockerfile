FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade &&\
	apt-get -y install ftp vsftpd

COPY ./conf/vsftpd.conf /etc/vsftpd.conf
COPY ./tools/start.sh .

CMD ["bash", "start.sh"]