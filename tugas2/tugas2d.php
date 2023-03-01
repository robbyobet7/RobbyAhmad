<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            line-height: 0px;       
        }
        .black {
            width: 60px;
            height: 60px;
            background-color: black;
            text-align: center;
            display: inline-block;
            border: 1px solid black;
            margin-right: -15px;
            margin-left: 10px;
            margin-top: 10px;
            margin-bottom: -11px;
        }
        .white {
            width: 60px;
            height: 60px;
            text-align: center;
            display: inline-block;
            border: 1px solid black;
            margin-right: -15px;
            margin-left: 10px;
            margin-top: 10px;
            margin-bottom: -11px;
        }
    </style> 
</head>
<body>
    <?php for ($i=1; $i <= 5; $i++) : ?>
        <?php if ($i %2 == 1) : ?>
            <div class="black"></div>
            <?php else :?>
            <div class="white"></div>
        <?php endif; ?>
    <?php endfor; ?>
    <br>            
    <?php for ($i=1; $i <= 5; $i++) : ?>
        <?php if ($i %2 == 1) : ?>
            <div class="white"></div>
            <?php else :?>
            <div class="black"></div>
        <?php endif; ?>
    <?php endfor; ?>
    <br>            
    <?php for ($i=1; $i <= 5; $i++) : ?>
        <?php if ($i %2 == 1) : ?>
            <div class="black"></div>
            <?php else :?>
            <div class="white"></div>
        <?php endif; ?>
    <?php endfor; ?>
    <br>
    <?php for ($i=1; $i <= 5; $i++) : ?>
        <?php if ($i %2 == 1) : ?>
            <div class="white"></div>
            <?php else :?>
            <div class="black"></div>
        <?php endif; ?>
    <?php endfor; ?>
    <br>
    <?php for ($i=1; $i <= 5; $i++) : ?>
        <?php if ($i %2 == 1) : ?>
            <div class="black"></div>
            <?php else :?>
            <div class="white"></div>
        <?php endif; ?>
    <?php endfor; ?>
    <br>      
</body>
</html>