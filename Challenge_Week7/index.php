<DOCTYPE! HTML>
<header>
    <title>Michiel van Tienhoven MD5 Cracker</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</header>
<body>
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash of a four-character lower case string and 
attempts to hash all four-character combinations to determine the original four characters.</p>

<pre>Debug Output: 
<?php

    if ( isset($_GET['md5']) ) {
        $time_start = microtime(true);
        $md5 = $_GET['md5'];
        $alphabet = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.,?!'\":;";
        $attempts = 15;
        $total_checks = 0;
        $checked = "Not found";
        $break_check = "false";
        //$intervaller = microtime(true) * 1000;
        
        // function checkalphabet() {
        //     for ($i=0; $i<strlen($alphabet); $i++){

        //     }
        // }

        // $char1 = checkalphabet($i);
        // $char2 = checkalphabet($i);
        // $char3 = checkalphabet($i);
        // $char4 = checkalphabet($i);

        // function breaker($k) {
        //     if ($k == "true"){break;}
        // }

        // function time_elapser() {
        //     $time_current = microtime(true);
        //     $time_elapsed = $time_current - $time_start;
        //     $time_rounded = round($time_elapsed,1);
        //     $time_calc = $time_elapsed - $time_rounded;
        //     if ($time_calc > 0.009999 && $time_calc < 0.010001){
        //         print "$check $concat - total checks: $total_checks - total rounded time: $time_rounded - elapsed time: $time_elapsed - calculated time: $time_calc \n";
        //     }
        // }

        // function attempt() {

        //     if ($attempts > 0) {
        //         print "$check $concat\n";
        //         $attempts = $attempts -1;
        //     }
        // }

        // function checkmd5() {
        //     $check = hash('md5', $concat);
        //     if ($check == $md5) {
        //         $checked = $concat;
        //         $break_check = "true";
        //         break;
        //     }
        // }

        //very simple function
        function minus($a, $b){
            $c = $a - $b;
            return $c;
        }

        for($a=0; $a<strlen($alphabet); $a++) {
            $char1 = $alphabet[$a];
            if ($total_checks > 0 && $break_check == "true"){print "\n$check $concat\n";}
            //breaker("true");
            if ($break_check == "true"){break;}

            for($b=0; $b<strlen($alphabet); $b++){
                $char2 = $alphabet[$b];
                //breaker();
                if ($break_check == "true"){break;}
                
                for($c=0; $c<strlen($alphabet); $c++){
                    $char3 = $alphabet[$c];
                    //breaker();
                    if ($break_check == "true"){break;}

                    for($d=0; $d<strlen($alphabet); $d++){
                        $char4 = $alphabet[$d];

                        $concat = $char1.$char2.$char3.$char4;

                        $total_checks = $total_checks + 1;

                        //$checked = "Test One";
                        //$checked = "Test Two";
                        //$checked = $concat;
                        //$checked = $md5;
                        //checkmd5();
                        $check = hash('md5', $concat);
                        if ($check == $md5) {
                            $checked = $concat;
                            $break_check = "true";
                            break;
                        }
                        
                        //attempt();
                        if ($attempts > 0) {
                            print "$check $concat\n";
                            $attempts = $attempts -1;
                        }

                        // time_elapser();
                        $time_current = microtime(true);
                        //$time_elapsed = $time_current - $time_start;
                        $time_elapsed = minus($time_current, $time_start);
                        $time_rounded = round($time_elapsed,1);
                        $time_calc = $time_elapsed - $time_rounded;
                        if ($time_calc > 0.009999 && $time_calc < 0.010001){
                            print "$check $concat - total checks: $total_checks - total rounded time: $time_rounded - elapsed time: $time_elapsed - calculated time: $time_calc \n";
                        }
                    }
                }
            }
        } 
    }
    $testMega = "most amazing test in my life";
    $time_end = microtime(true);
    $time =  $time_end - $time_start;
    print "\nTotal checks: $total_checks\n";
    print "\nElapsed time: $time\n";

?>
</pre>

<p>PIN: <?= htmlentities($checked); ?></p>

<form>
<input type="text" name="md5" size="40">
<input type="submit" value="Crack MD5">
</form>

<ul>
<li>Reset</li>
<li>MD5 Encoder</li>
<li>MD5 Code Maker</li>
<li>Source code for this application</li>
</ul>

</body>
</html>