<html>
<body>
<!--Your code goes here-->
<?php // print_r($_GET)? ?>  
<?= $_GET['operate'] ?>
<?php switch ($_GET['operate']) {
        case "add": ?>
            <p>
                Vous additionnez les 2 nombres suivants : <?= $_GET['first3'] . " et " .$_GET['second3']; ?>
            </p>
        <?php break;
        case "div": ?>
            <p>
                Vous divisez les 2 nombres suivants : <?= $_GET['first3'] . " et " .$_GET['second3']; ?>
            </p>
        <?php break;
        default:
            echo "error";                
        }
?>

<p>
    Le résultat est : <?= $_GET['first3']/$_GET['second3']; ?>
</p>

<a href="index.php">Reset</a>
</body>
</html>