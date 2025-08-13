<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
include_once ("config_login.php"); // ver usar require()
try {
    $pdo = new PDO("mysql:host=" . SERVER_NAME . ";dbname=" . DATABASE_NAME, USER_NAME, PASSWORD);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
$usr = $_POST['username'];
$pass = $_POST['password'];
$hashed_pass = hash('sha256', $pass);
$sql="select * from users where (username=? or email=?) and password=?";
// Use de sentencias prepared
// uso de POO- Programacion orientada a objetos
$stmt=$pdo->prepare($sql);
$stmt->execute([$usr,$usr,$hashed_pass]);
$row=$stmt->fetch(PDO::FETCH_ASSOC);
if(!$row){
 echo "Los datos ingresados no son validos !";}
 else
{
// Ingresa

echo "Bienvenido!";

}
    ?>
</body>
</html>