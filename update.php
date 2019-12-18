<?php
    include "config/db_connect.php";

$sql = 'SELECT title,ingredients,id FROM pizza ORDER BY created_at';
$result = mysqli_query($conn, $sql);

mysqli_free_result($result);
mysqli_close($conn);
include "templates/header.php";

?>
<h4 class="center red-text">Pizza from Euro Pizzas!!!</>
<div class="container">
    <div class="row">
        <form action="#" Method="GET">
        <input type="text" name="title" value="Bread" placeholder="Enter Your Title"/>
        <input type="text" name="ingredients" value="Flour" placeholder="Enter Your Ingredients"/>
        <input type="text" name="email" value="folat1984@gmail.com" placeholder="Enter Your Email"/>
        <input type="submit" name="submit" value="Update"/>