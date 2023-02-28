<html>
<body>
<!--Your code goes here-->
<h1>ADDITION</h1>
<form method="get" action="addition.php">
  <input type="text" name="first1">
  <input type="text" name="second1">
  <input type="submit" value="OK">
</form>
<h1>DIVISION</h1>
<form method="get" action="division.php">
  <input type="text" name="first2">
  <input type="text" name="second2">
  <input type="submit" value="OK">
</form>
<h1>MIXTE</h1>
<form method="get" action="choix.php">
  <input type="text" name="first3">
  <input type="text" name="second3">
  <select name="operate">
    <option value="noChoice">Votre choix</option>
    <option value="add">Ajouter</option>
    <option value="div">Diviser</option>
  </select>
  <input type="submit" value="OK">
</form>
<a href="index.php">Reset</a>
</body>
</html>