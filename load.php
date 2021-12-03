<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
        //Credenciales Mysql
        $Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = 'image';
        
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        if($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        
        $insertar = $db->query("INSERT into images_tabla (imagenes, creado) VALUES ('$imgContent', now())");

        if($insertar) {
            echo "Archivo Subido Correctamente.";
        } else {
            echo "Ha fallado la subida, reintente nuevamente.";
        }
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}