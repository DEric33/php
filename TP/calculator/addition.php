<html>
<body>
<!--Your code goes here-->
<?php // print_r($_GET)? ?>  
<p>
    Vous additionnez les 2 nombres suivants : <?= $_GET['first1'] . " et " .$_GET['second1']; ?>
</p>
<p>
    Le résultat est : <?= $_GET['first1']+$_GET['second1']; ?>
</p>

<a href="index.php">Reset</a>
</body>
</html>