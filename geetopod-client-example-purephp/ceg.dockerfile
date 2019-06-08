FROM nimmis/apache

MAINTAINER nimmis <kjell.havneskold@gmail.com>

# disable interactive functions
ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
apt-get install -y php libapache2-mod-php  \
php-cli php-json php-curl && \
a2enmod rewrite

RUN mkdir -p /opt/ceg
COPY library /opt/ceg/library
COPY process /opt/ceg/process
COPY theme /opt/ceg/theme
COPY unapp /opt/ceg/unapp
COPY .htaccess /opt/ceg/.htaccess
COPY config.php /opt/ceg/config.php
COPY index.php /opt/ceg/index.php

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY apache2.conf /etc/apache2/apache2.conf

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
