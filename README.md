# Inception

![Site](https://user-images.githubusercontent.com/108487635/184502340-e401d128-7400-4000-a989-f0edf820951a.png)

<h2>Overview</h2>

This project is about setting up an infrastructure composed of different services using Docker and Docker Compose.

The goal is to set up Docker containers that contains `NGINX` , `WordPress` , `MariaDB` , `Redis Cache` , `FTP server` , `Adminer` , `CAdvisor` , and `static website` .

Each service has it's own `Dockerfile` which is called in `docker-compose.yml` by `Makefile` .



<h2>Usage</h2>

    mkdir ~/data ~/data/mariadb ~/data/wordpress ~/data/site
    make

![ClearlyDefined Score](https://img.shields.io/badge/success-125%2F100-brightgreen)

