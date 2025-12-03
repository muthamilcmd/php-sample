#!/bin/bash
  # Install Composer
  curl -sS https://getcomposer.org/installer | php
  mv composer.phar /usr/local/bin/composer
  chmod +x /usr/local/bin/composer
  cp /home/site/wwwroot/nginx_custom.conf /etc/nginx/sites-enabled/default
  service nginx reload
