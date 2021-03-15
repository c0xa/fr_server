FROM debian:buster

EXPOSE 80 443

RUN apt update
RUN apt install -y vim nginx wordpress curl default-mysql-server php7.3 php7.3-mysql php-json php7.3-fpm php-mbstring

RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 10 -nodes -out /etc/ssl/certs/tblink.crt -keyout /etc/ssl/private/tblink.key -subj "/C=RU/ST=Moscow/L=Moscow/O=School21/OU=tblink/CN=sofia"

COPY srcs/default /etc/nginx/sites-available/
COPY srcs/start.sh srcs/db.sql srcs/switch_autoindex.sh ./
RUN mv /usr/share/wordpress /var/www/html
COPY srcs/wp-config.php /var/www/html/wordpress

ADD https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-all-languages.tar.gz .
RUN mkdir /var/www/html/phpmyadmin
RUN tar xf phpMyAdmin-4.9.7-all-languages.tar.gz -C /var/www/html/phpmyadmin --strip-components=1
COPY srcs/config.inc.php /var/www/html/phpmyadmin

CMD bash start.sh
