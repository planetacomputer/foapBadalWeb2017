<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Cadena {
  public static function largo($cad)
  {
    return strlen($cad);
  }
  public static function mayusculas($cad)
  {
    return strtoupper($cad);
  }
  public function minusculas($cad)
  {
    return strtolower($cad);
  }
}

$c='Hola';
echo 'Cadena original:'.$c;
echo '<br>';
echo 'Largo:'.Cadena::largo($c);
echo '<br>';
echo 'Toda en mayúsculas:'.Cadena::mayusculas($c);
echo '<br>';
//echo 'Toda en minúsculas:'.Cadena::minusculas($c);
$cadena = new Cadena();
echo $cadena->minusculas($c);
echo $cadena->mayusculas($c);
echo Cadena::minusculas($c);

?>
</body>
</html>