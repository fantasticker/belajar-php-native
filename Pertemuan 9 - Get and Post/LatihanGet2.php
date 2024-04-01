<!-- Redirect -->
<?php
if(!isset($_GET["Name"]) && !isset($_GET["Type"]) && !isset($_GET["Skill1"]) && !isset($_GET["Skill2"]) && !isset($_GET["Image"])){
    header("Location: LatihanGet.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li{
            max-width: 40%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style: italic;
            color: #5c663c;
            list-style: none;
        }
        img{
            max-width: 30%;
        }
        a{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style: italic;
            text-align: justify;
            text-decoration: none;
            color: #0ba7b5;
        }
    </style>
</head>
<body>
    <ul>
        <li>Name        : <?php echo $_GET["Name"]; ?></li>
        <li>Type        : <?php echo $_GET["Type"] ?></li>
        <li>First Skill :  <?php echo $_GET["Skill1"]; ?></li>
        <li>Second Skill: <?php echo $_GET["Skill2"]; ?></li>
        <img src="image/<?php echo $_GET["Image"]; ?>" alt="Picture not found">
    </ul>
    <br><br>
    &emsp;&emsp;&emsp;
    <a href="LatihanGet.php">Back</a>
</body>
</html>