<?php 
include_once 'app/views/includes/header.php';
?> 

<h2 style="text-align: center;">
     Add user
</h2> 
<div style="text-align: center;">
<form action="addUser" method="post" >
    <label for="name">Name </label> 
    <input type="text" name="name" id="name" style="margin: 5px auto;"> <br> 
    <label for="surname">Surname </label>
    <input type="text" name="surname" id="surname" style="margin: 5px auto;"> <br> 
    <label for="age">Age </label> 
    <input type="number" name="age" id="age" style="margin: 5px auto;"> <br> 
    <input type="submit" value="+ Add user">
</form>
</div>