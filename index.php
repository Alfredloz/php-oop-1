<?php 
class VideoGame {
    public $cover;
    public $title;
    public $year;
    public $author;
    public $genre;

    public function __construct(string $cover, string $title, int $year, string $author, string $genre) {
    $this->cover =  $cover;
    $this->title = $title;
    $this->year = $year;
    $this->author = $author;
    $this->genre = $genre;
    }   
};
// Creazione dati

$videoGame1 = new VideoGame('https://it.wikipedia.org/wiki/The_Legend_of_Zelda_(serie)#/media/File:Zeldalogowhite.PNG', 'The legend of Zelda', 1986, 'Shigeru Miyamoto & Takashi Tezuka ', 'High fantasy');

$videoGame2 = new VideoGame('https://upload.wikimedia.org/wikipedia/en/thumb/b/b1/Mortal_Kombat_Logo.svg/1200px-Mortal_Kombat_Logo.svg.png', 'Mortal Kombat', 1992, ' Ed Boon & John Tobias', 'Picchiaduro');

$videoGame3 = new Videogame('https://it.wikipedia.org/wiki/Metal_Gear_Solid#/media/File:Metal_Gear_Solid_logo.svg', 'Metal Gear Solid', 1998, 'Hideo Kojima', 'Stealth');

$videoGame4 = new VideoGame('https://it.wikipedia.org/wiki/BioShock#/media/File:Bioshock_Logo.png', 'Bioshock', 2007, 'Ken Levine', 'Sparatutto / Survival horror');

$videoGame5 = new VideoGame('https://store-images.s-microsoft.com/image/apps.18195.14259955503324792.fee0f975-9292-4852-ad19-c6ec880d57d3.35e9f104-1086-48a4-a429-c1c8dd863347', 'Hollow Knight', 2017, 'Team Cherry', 'Fantasy');
// /Creazione dati
// Crezione array ed unione dei datinell'array 
$videoGameArray = [
$videoGame1,
$videoGame2,
$videoGame3,
$videoGame4,
$videoGame5
];

// var_dump($videoGameArray);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <h1>Video Game</h1>
    <?php 
   foreach ($videoGame1 as $game => $value) {?>
        <h3><?php echo $game . ":" . $value ?></h3>
   <?php }
    ?>
</body>
</html>