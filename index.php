<?php
$matches = [
    [
        'teamHome' => 'Celtis',
        'scoreHome' => '45',
        'teamAway' => 'Lakers',
        'scoreAway' => '70',
    ],
    [
        'teamHome' => 'Oklahoma City Thunder',
        'scoreHome' => '62',
        'teamAway' => 'New York Knicks',
        'scoreAway' => '21',
    ],
    [
        'teamHome' => 'Indiana Pacers',
        'scoreHome' => '12',
        'teamAway' => 'Utah Jazz',
        'scoreAway' => '64',
    ],
    [
        'teamHome' => 'Miami Heat',
        'scoreHome' => '55',
        'teamAway' => 'Phoenix Suns',
        'scoreAway' => '87',
    ]
];
?>

<?php 
if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['email'])) {
$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];
};
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="d-flex flex-column align-items-center">
        <?php
            foreach($matches as $games){
                echo "<h5> {$games['teamHome']} - {$games['teamAway']} </h5>";
                echo "<h5> {$games['scoreHome']} {$games['scoreAway']}</h5>";
            } ?>
        </div>

        <div class="text-center m-5">
            <form action="index.php" method="GET">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="age" placeholder="Age">
                <input type="text" name="email" placeholder="Email">
                <button>Invia</button>
            </form>
        </div>
        <?php 
        if (!empty($name) && !empty($email) && !empty($age)) {
            if(strlen($name) > 3 && strpos($email, "@") && strpos($email, ".") && is_numeric($age)){
                echo "<h3>Accesso Riuscito</h3>";
            } else {
                echo "<h3>Accesso Negato</h3>";
            }
        }
        ?>
    </div>
</body>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="js/script.js"></script>
</html>