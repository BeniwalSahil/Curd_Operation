<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        function sumss($a,$b){
            $z = $a + $b;
            return $z;
        }
        echo sumss(10,5);

        function add_five(&$b){
            $b += 5;
        }
        $num = 2;
        echo add_five($num);
        echo $num;

        $letter = "SAHIL BENIWAL NAME";

        for($i = strlen($letter) - 1; $i >= 0; $i--){
            echo $letter[$i];
        }

        function sumMyNumber(...$x){
            $n = 0;
            $len = count($x);
            for($i = 0;$i < $len; $i++){
                $n += $x[$i];
            }
            return $n;
        }
        $a = sumMyNumber(24,43,3,43);
        echo $a;

        function myFmaily($lastname,...$firstname){
            $txt ="";
            $len = Count($firstname);
            for($i = 0; $i < $len; $i++){
                $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
            }
            return $txt;
        }
        $aa = myFmaily("SAHIL","BENIWAL","SURENDER","BENIWAL");
        echo $aa;


        $arry = array("SANME","Asedas","ASdasd");
        print_r($arry);

        $myarr  = array("SAHIL",23,["SABI","NAM"]);
        print_r($myarr);
    ?>

</body>

</html>