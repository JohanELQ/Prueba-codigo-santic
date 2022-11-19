<?php

include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $con->real_escape_string(htmlentities($_POST['title']));
    $description = $con->real_escape_string(htmlentities($_POST['description']));

    // Se valida que los campos titulo o descripcion no queden vacios
    if ($title == '' || $title == null) {
        echo 'Por favor ingrese un nombre';
    }
    if ($description == '' || $description == null) {
        echo 'Por favor ingrese una descripcion';
    }

    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    // se valida que el campo archivo no quede vacio
    if ($file_name == '' || $file_name == null) {
        echo 'Debe adjuntar un archivo';
    }
    else{
        $formatos_Permitidos = array("pdf");
        $archivos = $_FILES['file']['name'];
        $extension = pathinfo($archivos, PATHINFO_EXTENSION);

        if(!in_array($extension, $formatos_Permitidos))
        {
            echo "Error: Formato de archivo no valido!";
        }
        else
        {
            $file_type = $_FILES['file']['type'];
            list($type, $extension) = explode('/', $file_type);
            if ($extension == 'pdf') {
                $dir = 'documentos/';
                if (!file_exists($dir)) {
                    mkdir($dir, 0777, true);
                }
                $file_tmp_name = $_FILES['file']['tmp_name'];
                $new_name_file = $dir . file_name($file_name) . '.' . $extension;
                if (copy($file_tmp_name, $new_name_file)) {
                    
                }
            }
        }    
    }


    // se valida que todos los campo hayan sido diligenciados para actualizar la base de datos
    if($title != '' && $description != '' && $file_name != '')
    {
        $ins = $con->query("INSERT INTO documentos(title,description,url) VALUES ('$title','$description','$new_name_file')");

        if ($ins) {
            echo 'El archivo se subio exitosamente';
        } else {
            echo 'Error: No se pudo subir el archivo!';
        }
    }

    

    
} else {
    echo 'Error: La conexion ha fallado';
}
