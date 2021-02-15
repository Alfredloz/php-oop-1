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
    public function getTitle(){
       return $this->title; 
    } 
    public function getCover(){
        return $this->cover;
    } 
    public function getYear(){
        return $this->year;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getGenre(){
        return $this->genre;
    }
};
// Creazione dati

$videoGame1 = new VideoGame('https://www.respawn.it/wp-content/uploads/2017/03/zelda-cover.jpg', 'The legend of Zelda', 1986, 'Shigeru Miyamoto & Takashi Tezuka ', 'High fantasy');

$videoGame2 = new VideoGame('https://upload.wikimedia.org/wikipedia/en/thumb/b/b1/Mortal_Kombat_Logo.svg/1200px-Mortal_Kombat_Logo.svg.png', 'Mortal Kombat', 1992, ' Ed Boon & John Tobias', 'Picchiaduro');

$videoGame3 = new Videogame('https://images-na.ssl-images-amazon.com/images/I/51IOiivl-AL._AC_.jpg', 'Metal Gear Solid', 1998, 'Hideo Kojima', 'Stealth');

$videoGame4 = new VideoGame('https://gameindustry.it/wp-content/uploads/2020/08/H2x1_NSwitch_BioShockTheCollection-scaled.jpg', 'Bioshock', 2007, 'Ken Levine', 'Sparatutto / Survival horror');

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
// var_dump($videoGameArray);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <style> 
        .box{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        img{
            height: 200px;
            width: 100%;
        }
        .card{
            height: 30rem;
            width: 15rem;
            border: 1px solid black;
        }
  </style>
</head>
<body>
    <h1>Video Game</h1>
   <div class="box">
   <?php 
   foreach ($videoGameArray as $game => $value) {?>
    <div class="card">
        <img src="<?php echo $value->getCover() ?>" alt="">
        <h3>titolo: <?php echo $value->getTitle() ?></h3>
        <p>Autore/i: <?php echo $value->getAuthor() ?> </p>
        <p>Anno: <?php echo $value->getYear() ?></p>
        <p>Genere: <?php echo $value->getGenre() ?></p>
        </div>
   <?php }
    ?>
   </div>
</body>
</html>