<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <input type="password" name="name">
        <input type="submit">
    </form>
    <?php 
    //     echo "<pre>";
    //    var_dump($_POST);
    //    echo "</pre>";
    //    die;

   // empty: kiểm tra một biến nào đó có giá trị rỗng hoặc chưa được khởi tạo hay không
        if(!empty($_POST['name'])){
            echo $_POST['name'];
        }else{
            echo "<p style='color:red'>Chua co du lieu</p>";
        }
    ?>
</body>
</html>