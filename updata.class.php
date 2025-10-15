<?php

class upload
{
//propiedades

private $imagesForder="img/";

//Metodos

public function uploadImage(){

$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];

if(($nombre_img == !null)&&($_FILES['image'^]['size'] <= 200000))´{

if (($_FILES["imagen"]["type"] == "image/gif")
                || ($_FILES["imagen"]["type"] == "image/jpeg")
                || ($_FILES["imagen"]["type"] == "image/jpg")
                || ($_FILES["imagen"]["type"] == "image/png")
{
                // Ruta donde se guardarán las imágenes que subamos
                $directorio = $this->imagesFolder;
                // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
                move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio . $nombre_img);
            } else {
                //si no cumple con el formato
                 exit("No se puede subir una imagen con ese formato ");
            }
        } else {
            //si existe la variable pero se pasa del tamaño permitido
            if ($nombre_img == !NULL) exit("La imagen es demasiado grande ");
        }
        return $directorio . $nombre_img;
    }

?>