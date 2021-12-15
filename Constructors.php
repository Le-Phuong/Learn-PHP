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
        class Books{
            var $title;
            var $author;
            var $page;
            function __construct($atitle, $aauthor, $apage){
                $this->title = $atitle;
                $this->author = $aauthor;
                $this->page = $apage;
            }
        }

        $book1 = new Books("Harry Potter","JK Rowling",400);
        echo $book1->title;

        $book2 = new Books("Lord of the rings", "Tolkien",200);
    ?>
</body>
</html>