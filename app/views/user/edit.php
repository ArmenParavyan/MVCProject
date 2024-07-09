<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" value="<?php echo($data['name'])?>">
        <input type="text" name="surname" value="<?php echo($data['surname'])?>">
        <input type="number" name="age" value="<?php echo($data['age'])?>">
        <input type="submit" value="edit">
    </form>
</body>
</html>
