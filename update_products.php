[18:19, 9/24/2025] *Joel Mendes*: .
[18:19, 9/24/2025] +54 9 11 6999-2741: <?php
session_start();
if ($_SESSION['logueado']) {
    include_once("config_product.php");
    include_once("db.class.php");
    $link = new Db();
    $id = $_POST['id'];
    $name = $_POST['nombre'];
    $price = $_POST['precio'];
    $category = $_POST['categoria'];
    $fechaIng = $_POST['fecha'];
    $img = $_POST['image'];
    $sql="update products set product_name='$name',price='$price',id_category='$category',start_date='$fechaIng',image='$img' where id_product=".$id;
    $stmt=$link->run($sql);
    header('Location:welcome.php');
}
?>