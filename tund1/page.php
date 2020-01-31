<?php
    $myName = "Andrus Rinde";
    $fullTimeNow = date("d.m.Y H:i:s");
    //<p>Lehe avamise hetkel oli: <strong>31.01.2020 11:32:07</strong></p>
    $timeHTML = "\n <p>Lehe avamise hetkel oli: <strong>" .$fullTimeNow ."</strong></p> \n";
?>
<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8">
	<title>Veebirakendused ja nende loomine 2020</title>
</head>
<body>
	<h1><?php echo $myName; ?></h1>
	<p>See leht on valminud õppetöö raames!</p>
    <?php
        echo $timeHTML;
    ?>
</body>
</html>