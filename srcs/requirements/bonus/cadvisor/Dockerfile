FROM debian:buster

RUN apt-get update -y && apt-get install curl -y &&\
	curl -L https://github.com/google/cadvisor/releases/download/v0.23.4/cadvisor -o /usr/bin/cadvisor --silent &&\
	chmod +x /usr/bin/cadvisor

ENTRYPOINT [ "/usr/bin/cadvisor", "-logtostderr", "--port=3000" ]