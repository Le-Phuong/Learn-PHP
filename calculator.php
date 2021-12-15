<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>

<body>
    <?php
    function TinhTong($num1, $num2, $result)
    {
        switch ($result) {
            case 'Add':
                $kq = $num1 + $num2;
                break;
            case 'Subtract':
                $kq = $num1 - $num2;
                break;
            case 'Multiply':
                $kq = $num1 * $num2;
                break;
            case 'Divide':
                $kq = $num1 / $num2;
                break;
        }
        return $kq;
    }
    if (!empty($_POST['cal'])) {
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        $result = $_POST['cal'];
        if ($result == 'Add') {
            $xx =  TinhTong($num1, $num2, $result);
        } else if ($result == 'Subtract') {
            $xx =  TinhTong($num1, $num2, $result);
        } else if ($result == 'Multiply') {
            $xx =  TinhTong($num1, $num2, $result);
        } else if ($result == 'Divide') {
            TinhTong($num1, $num2, $result);
            $xx =  TinhTong($num1, $num2, $result);
        }
    }
    ?>
    <form action="calculator.php" method="post">
        <input type="number" name="number1"> First Number<br><br>
        <input type="number" name="number2"> Second Number <br><br>
        <input type="number" value="<?php echo $xx ?>"> Result<br><br>
        <input type="submit" name="cal" value="Add">
        <input type="submit" name="cal" value="Subtract">
        <input type="submit" name="cal" value="Multiply">
        <input type="submit" name="cal" value="Divide">
    </form>

</body>

</html>