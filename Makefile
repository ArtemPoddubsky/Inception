VOLUMES = mariadb wordpress site

all:
	docker-compose -f ./srcs/docker-compose.yml --env-file ./srcs/.env up -d

stop:
	docker-compose -f ./srcs/docker-compose.yml --env-file ./srcs/.env down

fclean: stop
	docker system prune -a
	docker volume rm -f $(VOLUMES)

re: fclean all

rm_data:
	sudo rm -rf ~/data/mariadb/*
	sudo rm -rf ~/data/wordpress/*
	sudo rm -rf ~/data/site/*