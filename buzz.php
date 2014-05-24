<html>
<head>
<title>FizzBuzz</title>
</head>
<!-- Omar Fuentes Hernández-->
<body>
<?php
for($iNumero=1; $iNumero<=100; $iNumero++)
{
 if ($iNumero%2==0)
{
  echo "El numero $iNumero es Fizz";
  echo "<br>";
}
elseif ($iNumero%7==0)
{
  echo "El numero $iNumero es FizzBuzz";
  echo "<br>";
}
else
{
  echo "El numero $iNumero es Buzz";
  echo "<br>";
}
}
?>
</body>
</html>
