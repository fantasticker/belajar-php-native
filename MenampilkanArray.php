<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan array php</title>
</head>
<?php
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
?>
<style>
    .kotak{
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
    .clear{
        clear: both;
    }
</style>
<body>
    <!-- Menampilkan array PHP cara 1: -->
    <?php for($i = 0; $i < count($angka); $i++){?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- Menampilkan array php cara 2: -->
    <?php foreach($angka as $a){ ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>
    
    <!-- Menampilkan array php cara 3: -->
    <?php foreach($angka as $a): ?>
    <div class="kotak"><?php echo $a ?></div>
    <?php endforeach;?>
</body>
</html>