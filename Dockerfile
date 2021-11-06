FROM httpd
EXPOSE 8080
COPY ./ /usr/local/apache2/htdocs/
