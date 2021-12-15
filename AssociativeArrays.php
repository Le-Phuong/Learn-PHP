<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="AssociativeArrays.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
    $arr = array("Jim"=>"A+", "Pam"=>"B", "Oscar"=>"C");
    if(!empty($_POST['student'])){
    echo $arr[$_POST['student']];}
    ?>
</body>
</html>