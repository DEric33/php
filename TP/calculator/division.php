<html>
<body>
<!--Your code goes here-->
<?php // print_r($_GET)?>
<p>
    Vous divisez les 2 nombres suivants : <?= $_GET['first2'] . " et " .$_GET['second2']; ?>
</p>
<p>
    Le résultat est : <?= $_GET['first2']/$_GET['second2']; ?>
</p>

<a href="index.php">Reset</a>
</body>
</html>