<?php session_start(); 
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_SESSION['finale'])){
    echo $_SESSION['finale'];
    unset ($_SESSION['finale']);
}
    $result_dados = "SELECT * FROM receptor";
    mysqli_query($conexao, $result_dados);
?>
</body>
</html>