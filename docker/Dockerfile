FROM wyveo/nginx-php-fpm:php74
COPY default.conf /etc/nginx/conf.d/default.conf

# tools install
RUN apt update

#RUN apt-get install php7.4-sqlite -y
#RUN phpenmod sqlite3
#RUN apt-get install -y php-phpdbg
#RUN apt-get install -y php-xdebug

RUN apt install -y git tmux curl wget zip unzip htop npm
RUN apt update -y
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

# Seta o diretório de trabalho
RUN mkdir storage/
RUN mkdir bootstrap/
RUN chmod -R 777 storage/
RUN chown -R www-data: storage bootstrap
WORKDIR /usr/share/nginx

# Configura o time zone
ENV TZ America/Sao_Paulo
