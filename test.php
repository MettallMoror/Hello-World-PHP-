<!DOCTYPE html>
<html>
<head>
<!-- CSS for background-->
<style>h1 {color:#FF0000;}</style> 
<meta charset="UTF-8">
<title>second</title>
</head>
<body>
<?
//PHP-Trainig, loading a file^^
$c = file("text.txt");
foreach ($c as $d)
{echo ($d);}
?>
<!-- The "Hello World" I promised :) -->
<?
echo "hello World";
?>
</body>
</html>