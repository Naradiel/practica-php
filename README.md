# Práctica PHP | Samsung Desarrolladoras 2023

## Descripción del proyecto
En esta práctica desarrollaremos un formulario en PHP a partir de la BBDD desarrollada en la práctica del módulo anterior.

## Dependencias
- [PHP](https://www.php.net/) 7.2 o superior
- [MySQL](https://www.mysql.com/) 5.7 o superior

## Instrucciones de instalación
1. **Clona** este repositorio:
   ```sh
   git clone https://github.com/Naradiel/practica-mysql.git
      ```
2. **Accede al directorio del repositorio:** Navega al directorio del repositorio clonado ejecutando el siguiente comando:
   ```sh
   cd practica-mysql
      ```
3. **Importa el archivo .sql:** Asegúrate de tener acceso al servidor de bases de datos MySQL. Ejecuta el siguiente comando para importar el archivo usuario.sql en tu servidor:
   ```sh
   mysql -u <USUARIO> -p <NOMBRE_DE_LA_BASE_DE_DATOS> < usuario.sql
      ```
    Reemplaza <USUARIO> con el nombre de usuario de tu base de datos y <NOMBRE_DE_LA_BASE_DE_DATOS> con el nombre de la base de datos en la que deseas importar el archivo .sql. 

4. **Verifica la importación:** Una vez completada la importación, puedes verificar si el archivo .sql se ha importado correctamente en tu base de datos MySQL.
  
5. **Actualiza los detalles de conexión** en el archivo `index.php` con los valores correspondientes:
   ```php
    $servername = "localhost";
    $username = "tu-usuario";
    $password = "tu-contraseña";
    $dbname = "nombre-de-tu-base-de-datos";
      ```
6. **Abre el proyecto en tu servidor web local:**
    - Copia los archivos del formulario a la carpeta de tu servidor web local (por ejemplo, `htdocs` si estás utilizando XAMPP).
    - Accede al formulario en tu navegador web utilizando la URL correspondiente (por ejemplo, `http://localhost/index.php`).
  
7. **Completa el formulario** y envía tus datos de prueba.
  
## Licencia
Distributed under the [MIT](https://choosealicense.com/licenses/mit/) License. See `LICENSE` for more information.
