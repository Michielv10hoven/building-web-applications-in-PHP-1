<?php

?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Welcome to Rock Paper Sciccors</title>
</head>
<body style="font-family: sans-serif;">
<h1>Welcome to Rock Paper Sciccors</h1>
<p><a href="login.php" style="text-decoration: none">Please Log In</a></p>
<p>Attempt to go to <a href="game.php" style="text-decoration: none">game.php</a> without logging in - it should fail with an error message.</p>

$_POST:
<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
?>

</body>
</html>
