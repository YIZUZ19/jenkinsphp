FROM php
EXPOSE 8080
ADD codigo/index.php, ClassUsuario.php /usr/src/myapp
//COPY codigo /usr/src/myapp
//WORKDIR /usr/src/myapp
