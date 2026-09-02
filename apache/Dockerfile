FROM debian:12
RUN apt update && apt install apache2 php libapache2-mod-php php-pgsql curl nano -y
RUN a2enmod rewrite expires headers
WORKDIR /var/www/html
CMD [ "apache2ctl", "-D", "FOREGROUND" ]

