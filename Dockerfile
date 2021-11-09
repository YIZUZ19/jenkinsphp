FROM php
EXPOSE 8080
COPY codigo /usr/src/myapp
WORKDIR /usr/src/myapp
