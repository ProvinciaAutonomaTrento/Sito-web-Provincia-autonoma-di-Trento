# See https://dockerfile.readthedocs.io/en/latest/content/DockerImages/dockerfiles/php-nginx.html
FROM webdevops/php-nginx:7.2-alpine

ADD ./docker/php-nginx /opt/docker/

WORKDIR /var/www

COPY composer.json composer.lock /var/www/

ENV COMPOSER_ALLOW_SUPERUSER=1
RUN echo "Running composer"  \
	&& composer install --prefer-dist --no-scripts --no-dev \
	&& composer clearcache

# Add default settings
COPY conf.d/ez/override /var/www/html/settings/override
COPY conf.d/ez/siteaccess /var/www/html/settings/siteaccess
COPY conf.d/ez/config.cluster.php /var/www/html/config.cluster.php

COPY security.txt /var/www/html/.well-known/security.txt

WORKDIR /var/www/html

RUN php bin/php/ezpgenerateautoloads.php -e

# Add version file
ARG CI_COMMIT_REF_NAME=no-branch
ARG CI_COMMIT_SHORT_SHA=1234567
ARG CI_COMMIT_TAG

COPY ./docker/scripts/get-version.sh /bin/
RUN /bin/get-version.sh > /var/www/html/VERSION

WORKDIR /var/www/html
