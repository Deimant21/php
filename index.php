<!DOCTYPE html>
<html>
<head>
    <title>Арзютов 9</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите число x:</p>
        <input type="text" name="x">
        <p>Введите число n:</p>
        <input type="text" name="n">
        <input type="submit" value="OK">
    </form>
    <?php
        $x=$_POST["x"];
        $n=$_POST["n"];
        $b = 0;
            $c = 0;
            $factor=0;
            if ($n==1) {
                $b=1;
            }
            else{
                for($a=0; $a<$n; $a++){
                    $c=$a;
                    if ($c!=0) {
                        $factor = 1;
                        for ($i=1; $i<=$c; $i++) {
                            $factor=$i*$factor;
                        }
                    }
                    else{
                        $factor=1;
                    }
                    
                    $b=$b+((((-1)**$a)*($x**($a)))/($factor));
                        }
            }
        
        echo $b;
    ?>
</body>
</html>