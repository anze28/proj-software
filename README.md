
# Cursos y Eventos para la Parroquia Virgen de Fatima

#### Proyecto de Ingenieria de Software 




## Areas de Trabajo

[Documentation en Notion](https://marble-report-579.notion.site/Software-Engineering-Project-dbdd805d3e2e49be881f7b5cd577b2be)

[Maquetación en Figma](https://marble-report-579.notion.site/Software-Engineering-Project-dbdd805d3e2e49be881f7b5cd577b2be)

[Maquetación en Figma](https://drive.google.com/drive/folders/1Qw2ok0W8TQ_HxIB3ctaFgqLLPisa6p3Q?usp=sharing)




## Despliegue

tenemos 2 opciones para tener una copia del proyecto, descargarlo en .zip o con git, en el caso de git hacer lo siguiente: 

```bash
git clone https://github.com/anze28/proj-software.git 
```
despues tenemos que instalar la base de datos, usaremos mysql y es necesario generar gredenciales, luego corremos el siguiente script:

[base de datos]()

despues tenemos que modificar las credenciales en [database.php](https://github.com/anze28/proj-software/blob/main/application/config/database.php)
donde modificaremos username, password, database con nuestros datos de la base datos que tenemos 
![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)

despues nos toca hacer correr el servidor, ponemos en la consola lo siguiente:
```bash
php -S localhost:8080 
```
con eso ya tendriamos inicializado el servidor y en el browser ponemos http://localhost:8080/ y nos cargaria las interfaces correctamente
![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)
ahora podremos navegar por las otras vistas que son **cursos** y **eventos**
![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)

![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)
## Herramientas

**Client:** php, codeigniter, 
