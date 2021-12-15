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
    class Book
    {
        var $title;
        var $author;
        var $page;
    }

    $book1 = new Book;
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->page = 400;
    echo $book1->title;

    $book2 = new Book;
    $book2->title = "Lord of the rings";
    $book2->author = "Tolkien";
    $book2->page = 200;
    echo $book2->title;
    ?>
</body>

</html>