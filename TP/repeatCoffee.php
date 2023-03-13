<?php
    $drinks = ["black"=>2,"cream"=>3,"late"=>4];
    $cake = ["Madeleine","Gateau sec","Croissant","Pain aux raisins"];
    $food = ["pasta"=>4.5,"salad"=>1.5,"bread"=>1];
?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
<?php foreach($drinks as $product=>$value):
?><li><?=$product." ".$value." €";?></li>
<?php endforeach;?>
</ul>

<h3>Pastries! ($2 each)</h3>
<ul>
<?php 
for($pastries=0;$pastries<count($cake);$pastries++): {
?>
<li><?=$cake[$pastries];?></li>

<?php
}
endfor;
?>
</ul>

<h3>Food</h3>
<ul>
<?php foreach($food as $product=>$value):
?><li><?=$product." ".$value." €";?></li>
<?php endforeach;?>
</ul>