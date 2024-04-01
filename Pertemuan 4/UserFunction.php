<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>

<body>
    <h1 style="color:blue">Selamat <?php echo salam(); ?>, Vissi!</h1>

    <?php
    echo time();
    function salam()
    {
        $hour = date("H");
        $greet = null;
        if (($hour > 24) && ($hour <= 11)) {
            $greet = "Pagi";
        } else if (($hour > 11) && ($hour <= 15)) {
            $greet = "Siang";
        } else if (($hour > 15) && ($hour <= 18)) {
            $greet = "Sore";
        } else if (($hour > 18) && ($hour <= 24)) {
            $greet = "Malam";
        } else {
            $greet = "Error timecode";
        }
        return "$greet";
    };
    ?>
</body>

</html>