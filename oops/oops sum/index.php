<?php

declare(strict_types=1);

include 'includes/class-autoload.inc.php';
?>

<html><head>

</head>
<body>

<form action="includes/calc.inc.php" method="post">


<p>my own calculater</a><br/>
<input type="number" name="num1"class="form-control"   placeholder"enter number">
<select name="oper">
<option value="add">ADDTION</option>
<option value="sub">SUBRATION</option>
<option value="div">DIVISION</option>
<option value="mul">MULTIPLY</option>
</select>

<input type="number" name="num2"class="form-control"  placeholder"enter number">

<input type="submit" name="sub" />
</form>
</body>
</html>