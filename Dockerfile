FROM php
EXPOSE 8080
ADD codigo/index.php /usr/src/myapp
ADD codigo/ClassUsuario.php /usr/src/myapp
WORKDIR /usr/src/myapp
ENTRYPOINT  [ "php", "./index.php" ]
#COPY codigo /usr/src/myapp
#//WORKDIR /usr/src/myapp
