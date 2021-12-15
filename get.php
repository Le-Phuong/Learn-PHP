<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get.php" method="get">
        Name: <input type="text" name="username"><br>
        Age: <input type="number" name="age"><br>
        <input type="submit">
    </form>
    <br>
    Tên: <?php 
    if(!empty($_GET['username'])){
    echo $_GET['username'];}
    else{
        echo "<p style='color:red'>Chưa nhập dữ liệu</p>";
    }
     ?>
    <br>
    Tuổi: <?php if(!empty($_GET['age'])){
    echo $_GET['age'];}
    else{
        echo "<p style='color:red'>Chưa nhập dữ liệu</p>";
    }?>
</body>
</html>