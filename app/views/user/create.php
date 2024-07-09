<?php 
include_once 'app/views/includes/header.php';
?> 

<h1>
    Add user
</h1>
<form action="addUser" method="post">
    <label for="name">Name: </label> <input type="text" name="name" > <br>
    <label for="surname">Surname: </label><input type="text" name="surname" > <br>
    <label for="age">Age: </label> <input type="number" name="age"> <br> 
    <input type="submit" value="Submit">
</form>