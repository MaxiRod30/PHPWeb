# git-PHPWeb
Proyecto BIOS web2.0 (con ejemplos)

OBJETIVOS GENERALES ShopCamWeb es una empresa OnLine dedicada al rubro de la fotografía la cual permite a los usuarios registrados ver los productos a precios exclusivos. Para ello es necesario desarrollar un sistema que permita registrar a los usuarios del tipo administrador y consumidor. Los usuarios Administradores podrán añadir categorías, marcas y productos, mientras que un usuario consumidor podrá realizar todo tipo de consultas sobre los productos y obtener un archivo en formato PDF, si así lo desea. Para tal caso se han diseñado las siguientes tablas: 
 
 
DETALLES  Tabla Usuarios: Esta tabla contiene la información mínima necesaria para registrar los usuarios que pueden utilizar el sistema, es decir, un nombre, el usuario y clave (encriptado). El sistema deberá proveer la posibilidad de registrarse como tal, pero no permitirá eliminarlos, aunque sí será posible que el propio usuario cambie su clave si lo desea. En este caso, como seguridad, el usuario estará obligado a colocar su antigua clave y verificar la nueva. No será posible que existan nombres de usuarios repetidos por lo que se deberá mostrar un mensaje adecuado si esto sucede. 
 
Tabla Productos: Esta tabla contiene la información necesaria para registrar y presentar los diferentes productos del catálogo. La cual deberá poseer un identificador, descripción, precio, marca, categoría, país de origen e imagen. Todos los campos son obligatorios y el identificador será generado en forma automática. El tamaño y tipo de dato debe ser establecido a su criterio. Los campos marca y categoría son referencias a los identificadores de las tablas correspondientes.  
 
Tablas Marca:  Contiene el identificador automático y nombre de la marca, y todos ellos son obligatorios. 
 
Tablas Categorías:  Al igual que la tabla anterior, solo contiene el identificador automático y nombre de la categoría, siendo todos ellos obligatorios. 
 
País de Origen: Aunque también debe ser posible seleccionar el país desde una lista desplegable, ésta es interna (no se encuentra en la Base de Datos) ya que contiene los únicos tres países desde donde se importan los productos: China, USA y UK. 

REQUISITOS Y DESCRIPCIÓN El sitio deberá respetar la siguiente estructura mínima: 
 
 
Página de Inicio: 
 
Sobre esta página simplemente se mostrará un texto inicial, a modo de título/logo, que representa a la empresa. Su principal finalidad es brindar vínculos hacia el resto de las secciones de la aplicación como Menú de Acceso. 
 
 
Productos:  
 
Un usuario administrador, podrá realizar Altas, Bajas (lógicas) y modificaciones sobre cualquier producto existente, teniendo en cuenta que tanto la categoría, como la marca y país, debe ser presentado en una lista desplegable (combo box) permitiendo así seleccionarla de forma segura y evitando el ingreso por parte del usuario. El contenido de esta lista, es obtenido de las tablas correspondientes (excepto el país que es interna).  
 
 
Categorías, Marcas y País de Origen: Solo es posible realizar nuevos ingresos y modificaciones, pero no se podrá realizar bajas y la actualización sólo se realiza sobre el nombre del dato, permitiendo corregir cualquier problema de escritura. Estas operaciones puede realizarlo un administrador. 
 
 
Consultas: 
 
Debe existir la posibilidad de ver un listado solamente de marcas, categorías y país presentando su identificador y nombre, para permitir realizar una modificación del texto, al seleccionar un ícono representativo. Todos ellos se muestran inicialmente ordenados alfabéticamente.   Listado que permita ver toda la información de los productos que se encuentran de baja. 
 
En todos los casos debe ser posible ordenar por cualquier columna en forma ascendente o descendente y debe existir la posibilidad de acceder a la modificación y eliminación de cualquier registro en forma directa por medio de un ícono representativo.  
 
Para el caso de la fotografía del producto, la misma se presentará en una ventana emergente (pop-up). 
 
Finalmente debe existir un mecanismo que permita realizar una consulta dinámica de los productos, seleccionando una serie de filtros dese listas desplegables sobre marca, categoría, país y rango de precios, presentando una grilla de resultados, la cual se genera por medio de AJAX. 
 
Siempre se deberá permitir acceder a la modificación o eliminación de un registro por medio de iconos representativos, teniendo en cuenta que esto sólo lo puede realizar un administrador. 


IMAGENES DEL SITIO WEB:

![IMAGEN1](https://user-images.githubusercontent.com/55286302/76169815-c6e3f300-615a-11ea-976d-15c0c36f12f1.png)

![IMAGEN2](https://user-images.githubusercontent.com/55286302/76169869-62756380-615b-11ea-8bc8-7612eaa134aa.png)

![IMAGEN3](https://user-images.githubusercontent.com/55286302/76169870-64d7bd80-615b-11ea-974c-4fcb412c476c.png)

![IMAGEN4](https://user-images.githubusercontent.com/55286302/76169871-6608ea80-615b-11ea-9a55-85bee2c7b6ad.png)

![IMAGEN5](https://user-images.githubusercontent.com/55286302/76169873-67d2ae00-615b-11ea-9c33-2e17e044b972.png)
