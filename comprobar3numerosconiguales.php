<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<title>Formulario de tres números</title>
    </head>
    
    <body>
        <form action="index.php" method="post">
            <fieldset>
		<legend>Los tres números</legend>
                
                    Número A
                    <input type="text" name="n1"><br><br>
                    
                    Número B
                    <input type="text" name="n2"><br><br>
                    
                    Número C
                    <input type="text" name="n3"><br><br><br>
                    
                    <input type="submit" name="enviar" value="Enviar">
            </fieldset>
            <fieldset>
                El resultado es:
                
                <?php

                $a = $_POST['n1'];
                $b = $_POST['n2'];
                $c = $_POST['n3'];

                if($a>$b)
                    if($b>$c) echo $a.' > '.$b.' > '.$c;
                    else if($c>$b)
                            if($a>$c) echo $a.' > '.$c.' > '.$b;
                            else if($c>$a) echo $c.' > '.$a.' > '.$b;
                                 else echo $c.' = '.$a.' > '.$b;
                         else echo $a.' > '.$b.' = '.$c;
                else if($b>$a)
                        if($a>$c) echo $b.' > '.$a.' > '.$c;
                        else if($c>$a)
                                if($b>$c) echo $b.' > '.$c.' > '.$a;
                                else if($c>$b) echo $c.' > '.$b.' > '.$a;
                                        else echo $b.' = '.$c.' > '.$a;
                             else echo $b.' > '.$c.' = '.$a;
                     else if($a>$c) echo $a.' = '.$b.' > '.$c;
                          else if($c>$a) echo $c.' > '.$a.' = '.$b;
                               else echo $a.' = '.$b.' = '.$c;

                ?>
            </fieldset>
        </form>
            
            
        
    </body>
</html>