<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $variabele1 = 10;
    $variabele2 =10;
    if($variabele1 == $variabele2){
    echo "De twee waarden zijn gelijk";
    }
    else{
        echo "De twee waarden zijn ongelijk";
    }
    ?><br>
    <?php
    $variabele1 = 10;
    $variabele2 = 12;
    if($variabele1 != $variabele2){
        echo "De twee waarden zijn ongelijk";
    }
    ?><br>
    <?php
    $variabele1 = 10;
    $variabele2 =10;
    if($variabele1 == $variabele2){
    echo "De twee waarden zijn gelijk";
    }
    if($variabele1 != $variabele2){
        echo "De twee waarden zijn ongelijk";
    }
    ?><br>
    <form action="/action_page.php" method="get" target="_blank">
  <label for="Uname">Username</label>
  <input type="text" id="Uname" name="Uname"><br><br>
  <label for="pass">Password</label>
  <input type="text" id="pass" name="pass"><br><br>
  <button type="submit">Submit</button>
  <button type="submit" formmethod="post">Submit using POST</button>
</form>


</body>
</html>