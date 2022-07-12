<?php

class Movies {
    public $title;
    public $genre;
    public $duration;
    public $pegi;
    

    public function __construct($title, $genre, $duration, $pegi)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->pegi = $pegi;
        
    }

    public function movie_pegi($age) {
        if($age < $this->pegi){
            echo "<br>Too young for the movie";
        } else {
            echo "<br>Enjoy the movie";
        }

    }
    public function print_card($age) {
        return 
        $this->movie_pegi($age).
        "<h1>Title: {$this->title}</h1>
        <h3>Type: {$this->genre}</h3>
        <h3>Duration: {$this->duration} min </h3>";
    }
    
}

$Movie1 = new Movies("Star Wars", "Fantasy", 120, 18);
$Movie2 = new Movies("Lord of the Rings", "Fantasy", 160, 18);
$Movie3 = new Movies("Coco", "Animated", 110, 1);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP 1</title>

</head>
<body>
    <?php
        echo $Movie1->print_card(20);
        echo $Movie2->print_card(15);
        echo $Movie3->print_card(5);
    ?>
    
</body>
</html>