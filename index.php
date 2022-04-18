<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regular</title>
</head>
<body>
  <?php
    echo "<h3>Task 1</h3>";
    $str = 'abba aaab abbba abbbba aaab baaa aab abbbbba';
    var_dump(preg_replace("#a{3}(?=b)#","!", $str));

    echo "<h3>Task 2</h3>";
    $arr = "";
    $str = 'aa aba abba abbba abbbba abbbbba';
    preg_match_all("#abbbb+a#", $str, $arr);
    var_dump($arr);

    echo "<h3>Task 3</h3>";
    $arr = "";
    $str = 'aba aca aea abba adca abea';
    preg_match_all("#ab.a#", $str, $arr);
    var_dump($arr);

    echo "<h3>Task 4</h3>";
    $str = 'aae xxz 33a';
    var_dump(preg_replace("#[a-z0-9]{2}#","!", $str));
  ?>
</body>
</html>