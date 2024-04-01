<!-- Method Get dapat digunakan pada URL(link) dan form HTML -->
<?php
$card = [
    [
        "Name" => "[Evo] Asha",
        "Type" => "Bankruptcy",
        "Skill1" => "Saat hampiri lawan selama turnku, 85% pilih salah satu landmarkku lalu [Terbang Bersama]/Saat tiba di areaku, 75% Chare [Shield] (Maks. 2 level) & Saat lawan tiba di landmarkku, 70% Kurung Bubble",
        "Skill2" => "Saat tiba di semua area yang dibangun, 80% [Lempar Chakram] pada lawan secara random, lalu [Langsung Pindah] dan [Black Out Paksa] <Activation Exception>",
        "Image" => "pict10.PNG"
    ],
    [
        "Name" => "[Evo] Elloni",
        "Type" => "Bankruptcy",
        "Skill1" => "Saat hampiri lawan selama turnku, 85% pilih salah satu landmarkku lalu [Terbang Bersama]/Saat tiba di areaku, 75% Chare [Shield] (Maks. 2 level) & Saat lawan tiba di landmarkku, 70% Kurung Bubble",
        "Skill2" => "Saat tiba di semua area yang dibangun, 80% [Lempar Chakram] pada lawan secara random, lalu [Langsung Pindah] dan [Black Out Paksa] <Activation Exception>",
        "Image" => "pict9.PNG"
    ],
    [
        "Name" => "[Evo] Sweet Mnemion",
        "Type" => "Bankruptcy",
        "Skill1" => "Saat hampiri lawan selama turnku, 85% pilih salah satu landmarkku lalu [Terbang Bersama]/Saat tiba di areaku, 75% Chare [Shield] (Maks. 2 level) & Saat lawan tiba di landmarkku, 70% Kurung Bubble",
        "Skill2" => "Saat tiba di semua area yang dibangun, 80% [Lempar Chakram] pada lawan secara random, lalu [Langsung Pindah] dan [Black Out Paksa] <Activation Exception>",
        "Image" => "pict11.PNG"
    ],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Get</title>
    <style>
        li{
            list-style: none;
            margin-left: 45px;
        }
        h1{
            width: fit-content;
            margin-left: 5rem;
            padding: 0 2rem 0 2rem;
            border: 2px solid;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style: italic;
            color: #4e5c73;
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
    <h1>Champion League Top Character</h1>
    <ul>
    <?php foreach ($card as $c): ?>
        <li><a href="LatihanGet2.php?Name=<?php echo $c["Name"]; ?>&Type=<?php echo $c["Type"]; ?>&Skill1=<?php echo $c["Skill1"]; ?>&Skill2=<?php echo $c["Skill2"]; ?>&Image=<?php echo $c["Image"]; ?>"><?php echo $c["Name"]; ?></a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>