FROM php:7.4-apache
LABEL author="Vitalir"

ARG apache_config_path=/etc/apache2/apache2.conf

RUN apt-get update && apt-get -y install libaprutil1-dbd-mysql
RUN a2enmod authn_dbd && a2enmod dbd

# Setup mod_authn_dbd
# /bin/echo is required to handle -e (non-default bash flag)
RUN /bin/echo -e 'DBDriver mysql\nDBDParams "host=db,dbname=library_db,user=root,pass=root"\nDBDMin 4\nDBDMax 20\nDBDKeep 8\nDBDExptime 300\n' >> $apache_config_path

# Setup "dynamic/admin" Directory config (.htaccess does not work with AuthDBDUserPWQuery)
RUN /bin/echo -e '<Directory /var/www/html/admin>\n  AuthType Basic\n  AuthName "Library Server"\n  AuthBasicProvider dbd\n  Require valid-user\n  AuthDBDUserPWQuery "SELECT password FROM authn WHERE login = %s"\n</Directory>\n' >> $apache_config_path

RUN docker-php-ext-install mysqli
