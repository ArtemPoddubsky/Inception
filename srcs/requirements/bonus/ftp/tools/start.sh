#! /bin/bash

useradd rolando --home /var/www/wordpress -s /bin/bash
echo -e "256256\n256256" | passwd rolando
chgrp -R rolando /var/www/wordpress
chown -R rolando: /var/www/wordpress
chmod -R u+w /var/www/wordpress
echo "rolando" | tee -a /etc/vsftpd.userlist

vsftpd