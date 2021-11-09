FROM php
EXPOSE 8080
ADD codigo/index.php, ClassUsuario.php /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./index.php" ]
#COPY codigo /usr/src/myapp
#//WORKDIR /usr/src/myapp
