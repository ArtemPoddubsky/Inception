#! /bin/bash

if ! test -f "/var/www/wordpress/license.txt"; then
	wp-cli core download --allow-root --path="/var/www/wordpress/"
	wp-cli core install --allow-root --path="/var/www/wordpress/" --url="https://localhost/" --title=${DB_NAME} --admin_user=${WP_ADMIN} --admin_password=${WP_ADMIN_PASS} --admin_email=${WP_ADMIN_EMAIL}
	wp-cli user create --allow-root --path="/var/www/wordpress/" User2 user2@gmail.com --role=editor --user_pass=${WP_SECOND_USER_PASS}
	wp-cli plugin install redis-cache --allow-root --path="/var/www/wordpress/"
	wp-cli plugin activate redis-cache --allow-root --path="/var/www/wordpress/"
	wp-cli redis update-dropin --allow-root --path="/var/www/wordpress/"
	wp-cli redis enable --force --allow-root --path="/var/www/wordpress/"
	chmod 775 -R /var/www/wordpress/
	chown -R www-data:www-data /var/www
fi

php-fpm7.3 -F -R