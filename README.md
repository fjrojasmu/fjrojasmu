Implementación de una aplicación web utilizando contenedores y GitHub.

Crear instancia EC2
Tipo de maquina t2.micro
Amazon Linux
Utilizar clave vockey
Agregar puerto 80 en las reglas de entrada

Putty

Ingresar con usuario ec2-user
Ingresar a carpeta cd wordpress

Crear archivo php
vim wp-config.php

Correr contenedor
docker run -d -p 80:80 wordpress

Crear bbdd aurora
Ir a Amazon RDS
Hacer click en crear base de datos
Seleccionar Creación estándar en tipo de motor seleccionar Aurora(MySQL Compatible)
En plantillas elegir desarrollo y pruebas (bajo costo)
Identificador del clúster de base de datos debemos escribir un nombre a eleccion
En credenciales elegir el nombre de usuario maestro(como es test dejaremos admin)
Contraseña Duoc.2023
En Cluster storage configuration elegir Aurora Standard(bajo costo)
En Configuración de la instancia elegir clases con ráfagas, se considera apropiada la small para un sitio estandar
En Conectividad elegir Conectarse a un recurso informático de EC2 esto es para establecer una conexion interna con nuestra instancia ec2 con el contenedor(todas las demas opciones dejar por defecto)
En Autenticación de bases de datos elegir Autenticación con contraseña
Dejar todo lo demas por defecto y hacer click en crear base de datos

Instalar mysql en server ec2
sudo yum install mariadb105-server-utils.x86_64

Conectar a mysql aurora, dar privilegios al usuario en bbdd creada
mysql -h clusterbbdd-instance-1.cdejcgq6tctt.us-east-1.rds.amazonaws.com -P 3306 -u admin -p

Visualizar bbdd
show databases;

Dar privilegios a admin en bbdd
GRANT ALL PRIVILEGES ON wordpress.* TO admin
FLUSH PRIVILEGES;

Conectar bbdd con contenedor, abrir wordpress con IP Publica de EC2 (no se agrega :80 debido que se configuro la regla de seguridad http)
Elegir idioma de instalacion (Español Chile)
Dar los strings de conexiones que solicita wordpress
Nombre de bd word (se saca con los pasos anteriores)
nombre de usuario es el usuario maestro entonces es admin y su password (Duoc.2023)
Cambiar locahost por el punto de conexión de la instancia de base de datos
Ir a amazon RDS y en bases de datos seleccionamos la instancia
En el punto de enlace y puerto copiamos solo el punto de enlace que es algo asi clusterbbdd-instance-1.cdejcgq6tctt.us-east-1.rds.amazonaws.com

Instalacion finalizada de WORDPRESS.
