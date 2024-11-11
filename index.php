<?php

$host = "localhost";
$port = "3306";
$dbName = "filmesdb";
$user = "root";;
$pass = "";

$connUrl = "mysql:host=$host;port=$port;dbname=$dbName;charset=utf8mb4";

$pdo = new PDO($connUrl, $user, $pass);

$query = "SELECT * FROM filme";

$stmt = $pdo -> prepare($query);
$stmt -> execute();

$filmes = $stmt->fetchall();

echo "<pre>";
print_r($stmt->fetch());
echo "<pre>";


foreach($filmes as $filme){
    echo "<br>" . $filme['id'];
}
?>

<table border ="1">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Ano</th>
        <th>Descrição</th>
    </thead>
    <tbody>
        <tr>
            <td>asd</td>
            <td>asd</td>
            <td>asd</td>
            <td>asd</td>
        </tr>
    </tbody>
</table>