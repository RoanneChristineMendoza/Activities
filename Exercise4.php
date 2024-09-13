<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$loginMessage = '';
$dataMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $validUsername = 'testuser';
        $validPassword = 'testpassword';

        if ($username === $validUsername && $password === $validPassword) {
            $loginMessage = "Login successful. Welcome, $username!";
        } else {
            $loginMessage = "Invalid username or password.";
        }
    } else {
        $loginMessage = "Username or password not set.";
    }
}

// Handle GET request for data
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    $dataMessage = "You requested information for: " . $name;
} else {
    $dataMessage = "No name parameter provided.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Group 3</title>
    <link href="stylessample.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js" defer></script>
</head>
<body>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#profile">Profile</a>
        <a href="#contact">Contact</a>
        <div id="navbar-login" class="navbar-login">
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Username" required minlength="3" maxlength="50">
                <input type="password" name="password" placeholder="Password" required minlength="3">
                <button type="submit">Login</button>
            </form>
<?php if ($loginMessage) { echo "<p>$loginMessage</p>"; } ?>
        </div>
    </div>

    <div id="profile">
        <h1><b>GROUP PROFILE</b></h1>

    
        <div class="names">
            <div>
                <img src="raf.jpeg" alt="Raf">
                <p onclick="showInfo('rafael')">Rafael Alvin</p>
            </div>
            <div>
                <img src="eric.jpg" alt="Eric">
                <p onclick="showInfo('eric')">John Eric</p>
            </div>
            <div>
                <img src="chris.jpg" alt="Christian">
                <p onclick="showInfo('jason')">Christian Jason</p>
            </div>
            <div>
                <img src="ro.jpeg" alt="Ro">
                <p onclick="showInfo('roanne')">Roanne Christine</p>
            </div>
            <div>
                <img src="zach.jpg" alt="Zach">
                <p onclick="showInfo('zachary')">Zachary Johann</p>
            </div>
        </div>

      
        <div id="rafael" class="member-info">
            <h2>Leader: Rafael Alvin</h2>
            <p>Hi my name is Rafael Alvin M. Regondola. I am 20 years old and I live in Barangay Langgam San Pedro Laguna and I'm currently studying at 
                Pamantasan Lungsod ng Muntinlupa. My hobby is playing online games, watching movies, listening to songs and singing and dancing sometimes.
                When it comes to computer languages, I can only remember the lessons that we have tackled before in our previous year.</p>
                <b>Full name :</b> Regondola, Rafael Alvin M.
    </br>
    <b> Age:</b> 20
    </br>
    <b> Birthday:</b> 05/28/2004
    </br>
    <b> Height:</b> 5'11
    </br>
    <b> Address:</b> Brgy. Langgam San Pedro Laguna
    </br>
           
            <canvas id="rafaelChart"></canvas>
        </div>

        <div id="eric" class="member-info">
            <h2>Member: John Eric</h2>
            <p>Hi guys my name is John Eric Lara, Rañada. My age is 22 . And I live in San Pedro Laguna currently studying at Pamantasan Lungsod ng Muntilupa. 
                My hobby is reading books and playing online games.</p>
                </br>
            </br>
            <b>Full name :</b> Rañada, John Eric L.
            </br>
            <b> Age:</b> 22
            </br>
            <b> Birthday:</b> 10/22/2001
            </br>
            <b> Height:</b> 5'7
            </br>
            <b> Address:</b> Bayan Bayanan San Vicente, phase 5, San Pedro city of Laguna
            </br>
           
            <canvas id="ericChart"></canvas>
        </div>

        <div id="jason" class="member-info">
            <h2>Member: Christian Jason</h2>
            <p>Greetings, I am Christian Jason Oh currently an BSIT student at Pamantasan Lungsod ng Muntinlipa with an age of 22, which is kind of far 
                from my home in San Pedro Laguna. My hobbie