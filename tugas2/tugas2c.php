<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            line-height: 0;
        }

        .square {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin-right: -5px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <div class="square"><?= $i; ?></div>
    <?php endfor; ?>
    <br>
    <?php for ($i = 1; $i <= 9; $i++) : ?>
        <div class="square"><?= $i; ?></div>
    <?php endfor; ?>
    <br>
    <?php for ($i = 1; $i <= 8; $i++) : ?>
        <div class="square"><?= $i; ?></div>
    <?php endfor; ?>
    <br>
    <?php for ($i = 1; $i <= 7; $i++) : ?>
        <div class="square"><?= $i; ?></div>
    <?php endfor; ?>
    <br>
    <?php for ($i = 1; $i <= 6; $i++) : ?>
        <div class="square"><?= $i; ?></div>
    <?php endfor; ?>
    <br>
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <div class="square"><?= $i; ?></div>
    <?php endfor; ?>
    <br>
    <?php for ($i = 1; $i <= 4; $i++) : ?>
        <div class="square"><?= $i; ?></div>
    <?php endfor; ?>
    <br>
    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <div class="square"><?= $i; ?></div>
    <?php endfor; ?>
    <br>
    <?php for ($i = 1; $i <= 2; $i++) : ?>
        <div class="square"><?= $i; ?></div>
    <?php endfor; ?>
    <br>
    <?php for ($i = 1; $i <= 1; $i++) : ?>
        <div class="square"><?= $i; ?></div>
    <?php endfor; ?>
    <br>
</body>
</html>