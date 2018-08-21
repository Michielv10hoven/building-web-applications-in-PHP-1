<?php
    $salt = 'XyZzy12*_';
    $stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';
    $concat = $salt.$_POST['pass'];
    $md5 = hash('md5', $concat);
    $errormessage = false;
    //correct password = 'php123'

    if ( isset($_POST['who']) || isset($_POST['pass']) ) {
        if ($_POST['who'] == ''|| $_POST['pass'] == ''){
            $errormessage = 'Error: User name and password are required';
        }
        else if ($_POST['who'] !== '' && $md5 !== $stored_hash) {
            $errormessage = 'Incorrect password.';
        }
        else if ($_POST['who'] !== '') {
            header("Location: game.php?name=".urlencode($_POST['who']));
        }
    }

?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Log In to Rock Paper Sciccors</title>
</head>
<body style="font-family: sans-serif;">
<h1>Log In to Rock Paper Sciccors</h1>

<form method="post">
    <p> <label for="who">Name</label>
        <input type="text" name="who" id="who" size="40"
            value=""/></p>
    <p> <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" size="36" 
            value=""/></p>
    <input type="submit" name="dopost" value="Submit"/>
</form>
<p><a href="index.php" style="text-decoration: none">Return to homepage</a></p>

<p><?= htmlentities($errormessage); ?></p>

$_POST:
<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
?>

</body>
</html>
