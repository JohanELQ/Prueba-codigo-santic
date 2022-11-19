# Prueba-codigo-santic

# Codigo que ejecuta una vista simple de una pagina para subida de documentos, los documentos desplegados son visibles en una lista y se pueden visualizar posteriormente en forma de modal o en una pestaña a parte

#Para poder ejecutar el codigo es necesario tener Xampp instalado, e ingresar la carpeta del proyecto a la carpeta HTDOCS dentro de la carpeta de Xampp

#La carpeta contiene 4 archivos de codigo, 3 php y 1 bd, que se usa para construir la base de datos necesaria donde quedara guardada la informacion subida a la pagina

#Archivo conexion realiza la conexion a la base de datos y se encarga de realizar las correcciones ortograficas por tildes, espacios ys demas caracteres especiales, resmplazandolos por guiones, se recomienda primero crear la base de datos con el archivo bd para permitir el correcto funcionamiento del codigo

#Archivo index es el main que permite visualizar la pagina, modela la lista que se actualiza cada que un nuevo documento es subido, los modales que se desplegan para subida y vista de los documentos, y la opcion de visualizarlo en otra pestaña, se recomienda no cambiar el nombre de la carpeta donde estan incluidos todos los archivos para permitir el buen funcionamiento de estas opciones

#Archivo upload se encarga de ejecutar las acciones de la pagina, solicitar que toda la informacion este diligenciada y realizar la actualizacion de la base de datos, asi como actualizar la propia carpeta contenedora al trasladar los archivos subidos en la pagina a la carpeta donde se indica

