<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Le Phuong";
   // echo strtolower($name);//chữ thường
    echo strtoupper($name ."<br/>");//chữ in hoa
    echo strlen($name ."<br/>");//Độ dài ký tự
    echo strpos($name, "Le");//tìm kiếm văn bản chuỗi
    echo str_replace("Le", "Nguyen", $name);//Thay thế văn bản chuỗi
    ?>
</body>
</html>