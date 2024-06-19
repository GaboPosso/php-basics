<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gabriel Mejia</title>
</head>

<body>
  <h1>MD5 cracker</h1>

  <p>This application tasked an MD5 hash of four digits pin and check all 10,000 possible four digits PINs to determine the PIN.</p>
  <pre>
<?php
$goodtext = "Not found";

if (isset($_GET['md5'])) {
  $time_pre = microtime(true);
  $md5 = $_GET['md5'];

  $txt = "0123456789";
  $show = 15;

  for ($i = 0; $i < strlen($txt); $i++) {
    $num1 = $txt[$i];

    for ($j = 0; $j < strlen($txt); $j++) {
      $num2 = $txt[$j];

      for ($k = 0; $k < strlen($txt); $k++) {
        $num3 = $txt[$k];

        for ($l = 0; $l < strlen($txt); $l++) {
          $num4 = $txt[$l];

          
          $try = $num1 . $num2 . $num3 . $num4;

          
          $check = hash('md5', $try);
          if ($check == $md5) {
            $goodtext = $try;
            break;   
          }

          
          if ($show > 0) {
            print "$check $try\n";
            $show = $show - 1;
          }
        }
      }
    }
  }
  
  $time_post = microtime(true);
  print "Elapsed time: ";
  print $time_post - $time_pre;
  print "\n";
}
?>
</pre>

  <p>PIN: <?= htmlentities($goodtext); ?></p>
  <form action="get">
    <input type="text" name="md5" size="40"/>
    <input type="submit" value="Crack MD5"/>
  </form>
  <p><a href="index.php">Reset</a></li></p>
</body>

</html>