<html>
<head>
<title>php program for age in days</title>
</head>
<body>
<form method ="post">
<table border="0">
<tr>
<td><input type ="text" name="num1" value="" placeholder="enter a value"/></td>
</tr>
<tr>
<td><input type ="submit" name="submit" value="submit"/>
</td>
</tr>
</table>
</form>
<?php
if (isset($_POST["submit"]))
{
    $a=$_POST['num1'];
    $d=$a*365;
    echo "$a years age in days=".$d;
    return 0;
}
?>
</body>
</html>
