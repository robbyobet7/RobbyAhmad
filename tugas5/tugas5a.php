<?php 
    $actors = [
        [
            'name' => 'M Robby A',
            'nrp' => '223040094',
            'email' => 'muhamadrobby24@gmail.com',
            'major' => 'Informatics Engineering', 
            'profile picture' => 'robby.jpeg', 
        ],
        [
            'name' => 'Itadori Yuji',
            'nrp' => '223040095',
            'email' => 'itadoriyuji22@gmail.com',
            'major' => 'Environmental Engineering', 
            'profile picture' => 'itadori.jpeg',  
        ],
        [
            'name' => 'Fushiguro Megumi',
            'nrp' => '223040096',
            'email' => 'fushiguromegumi21@gmail.com',
            'major' => 'Food Engineering', 
            'profile picture' => 'megumi.jpeg',  
        ],
        [
            'name' => 'Gojo Satoru',
            'nrp' => '223040097',
            'email' => 'gojosatoru19@gmail.com',
            'major' => 'Informatics Engineering', 
            'profile picture' => 'gojo.jpeg',  
        ],
        [
            'name' => 'Getou Suguru',
            'nrp' => '223040098',
            'email' => 'getousuguru26@gmail.com',
            'major' => 'International Relationship', 
            'profile picture' => 'geto.jpeg',  
        ],
        [
            'name' => 'Ryoumen Sukuna',
            'nrp' => '223040099',
            'email' => 'ryoumensukuna99@gmail.com',
            'major' => 'International Relationship', 
            'profile picture' => 'sukuna.jpeg',
        ],
        [
            'name' => 'Kiyotaka Ayanokoji',
            'nrp' => '223040100',
            'email' => 'kiyotaka29@gmail.com',
            'major' => 'Environmental Engineering', 
            'profile picture' => 'ayanokoji.jpeg',
        ],
        [
            'name' => 'Lelouch Lamperouge',
            'nrp' => '223040101',
            'email' => 'lelouchv21@gmail.com',
            'major' => 'Informatics Engineering', 
            'profile picture' => 'lelouch.jpeg',
        ],
        [
            'name' => 'Uciha Itachi',
            'nrp' => '223040102',
            'email' => 'ucihachan98@gmail.com',
            'major' => 'International Relationship', 
            'profile picture' => 'itachi.jpeg',
        ],
        [
            'name' => 'Kamado Tanjiro',
            'nrp' => '223040103',
            'email' => 'tanjiro22@gmail.com',
            'major' => 'Food Engineering', 
            'profile picture' => 'tanjiro.jpeg',
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
    <style>
        img {
            width: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <h2>Student List</h2>
    <?php foreach($actors as $actor) { ?>    
        <li><img src="img/<?= $actor['profile picture']; ?>"></li>
        <ol>
            <li> Name: <?= $actor ['name']; ?></li>
            <li> NRP: <?= $actor ['nrp']; ?></li> 
            <li> Email: <?= $actor ['email'] ?></li>
            <li> Major: <?= $actor ['major']?></li>
        </ol>    
        <?php } ?>
</body>
</html>