<?php
    if (!isset ($_GET['name'])) {
        die("Name parameter missing");
    }
    
    if (isset ($_POST['logout'])) {
        header('Location:index.php'); die();
    }

    $names = array("Rock", "Paper", "Sciccors");
    $c_choice = $names[array_rand($names)]; // computer strategy choice (random)
    $h_choice = $_POST['human']; // human picked strategy choice (from human selection)
    $gameoutput = "Please select a strategy and press Play."; // default game output

    function check($computer, $human) {
        if ($computer == $human)
        { return "Tie"; }

        if ($computer == "Rock" && $human == "Paper"
        || $computer == "Sciccors" && $human == "Rock"
        || $computer == "Paper" && $human == "Sciccors"){
            return "You Win!";
        }
        
        else { return "You Lose!"; }
    }
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Rock Paper Sciccors</title>
</head>
<body style="font-family: sans-serif;">
<h1>Rock Paper Sciccors</h1>

<p>Welcome: <?= $_GET['name'];?></p>
<form method="post"
<p> <select name="human" id="human">
    <option value="">Select</option>
    <option value="<?= $names[0]?>">Rock</option>
    <option value="<?= $names[1]?>">Paper</option>
    <option value="<?= $names[2]?>">Sciccors</option>
    </select>
    <input type="submit" name="play" value="Play"/>
    <input type="submit" name="logout" value="Logout"/>
    <input type="submit" name="test" value="Test"/>
   </p>
</form>
<p class = "game_display">
<?php   
    if (isset ($_POST['play'])) {
        if ($h_choice == ""){
            $gameoutput = "Please select a strategy from the selection bar above.";
        }
        else {
            $gameoutput = "You picked ".$h_choice.", Computer picked ".$c_choice.", ".check($c_choice, $h_choice);
        }
    } 
    
    // if test button is clicked
    if (isset ($_POST['test'])) {
        $gameoutput = "";
        for($c=0; $c<3; $c++) {
                        
            for($h=0; $h<3; $h++) {     
                $r = check($names[$c], $names[$h]);
                
                echo "Human=$names[$h] Computer=$names[$c] Result=$r\n</br>";  
            }
        }
    } 
?>
<?= htmlentities($gameoutput); ?>

</p>

<p>
<?php if (isset ($_POST['play'])) { // show image depending on whether you tied, won or lost
    if (check($c_choice, $h_choice) == "Tie"){
        echo "</br><img src='img/tie.jpg' alt='tie' />";
    }
    if (check($c_choice, $h_choice) == "You Win!"){
        echo "</br><img src='img/win.jpg' alt='win' />";
    }
    if (check($c_choice, $h_choice) == "You Lose!"){
        echo "</br><img src='img/youdied.jpg' alt='you died' />";
    }
}
?> </p>
<p><a href="index.php" style="text-decoration: none">Return to homepage</a></p>


$_POST:

<?php
    echo "<pre>";
    print_r($_POST);
    echo $c_choice;
    echo $gameresult;
    echo "</pre>";
?>


</body>
</html>
