<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #gitgut{
            background-color:rgba(15, 193, 11, 0.52);
        }
    </style>
</head>
<body>
    <!-- <p>działa</p> -->
    <?php 
        $pytania = [];
        $odpowiedzi = [];


        $data = file_get_contents('quiz.htm');
        
        // preg_match('/<title>([^<]+)<\/title>/i', $data, $titles);
        // $title = $titles[1];
    
        // preg_match('/<img[^>]*src=[\'"]([^\'"]+)[\'"][^>]*>/i', $data, $matches);
        // $img = $matches[1];
        $qqq = explode('class="trescE">',$data);
        for($i = 0; $i<count($qqq);$i++){
            
            $x = strpos($qqq[$i], '.');
            $y = strpos($qqq[$i], '</div');
            $x = $x+2;
            // echo "x=".$x;
            // echo "y=".$y;
            if($i > 0)
            {
                // echo "<textarea>";
                // echo substr($qqq[$i],$x,$y);
                // echo "</textarea>";
                $pytania[] = substr($qqq[$i],$x,$y);
            }
            
        }
    
        echo "<hr>";
        echo "<hr>";
        $qqq2 = explode('class="odpgood">',$data);
        $qqq3 = explode('<div id="odpa',$data);
        $inter = 0;
        for($i = 0; $i<count($qqq2);$i++){
            
            $x = strpos($qqq2[$i], '.');
            $y = strpos($qqq2[$i], '</div>');
            $x = $x + 2;
            $y = $y;
            $z = $y - $x;

            if($i > 0)
         {   
                $odpowiedzi[] = substr($qqq2[$i],$x,$z);
            }}

            for($i = 0; $i<count($odpowiedzi);$i++){
                $posS = strpos($odpowiedzi[$i],">");
                $posE = strlen($odpowiedzi[$i]) - $posS;
                $odpowiedzi[$i] = substr($odpowiedzi[$i], $posS+1, $posE); 
            } 
        for($i = 0; $i<count($qqq2);$i++){
            
            $x = strpos($qqq2[$i], '.');
            $y = strpos($qqq2[$i], '</div>');
            $x = $x + 2;
            $y = $y;
            $z = $y - $x;

            if($i > 0)
         {
                
             
  
                $xT = strpos($qqq3[$i], 'A.');
                $yT = strpos($qqq3[$i],'id="odpb');
                $zT = $yT - $xT;
                
                $xT2 = strpos($qqq3[$i], 'B.');
                $yT2 = strpos($qqq3[$i],'id="odpc');
                $zT2 = $yT2 - $xT2;
                
                
                $xT3 = strpos($qqq3[$i], 'C.');
                $yT3 = strpos($qqq3[$i],'id="odpd');
               

                $zT3 = $yT3 - $xT3;
                
                $xT4 = strpos($qqq3[$i], 'D.');
                $yT4 = strpos($qqq3[$i],' class="sep">');
                $zT4 = $yT4 - $xT4;
if($i < 40){
echo $pytania[$i-1];
                echo '<section id="qqq">';
                    echo '<ol type="A">';
                        if(strpos(substr($qqq3[$i],$xT+3,$zT),$odpowiedzi[$inter]))
                            echo '<li id="gitgut">'.substr($qqq3[$i],$xT+3,$zT).'</li>';
                        else
                            echo '<li>'.substr($qqq3[$i],$xT+3,$zT).'</li>';
                        if(strpos(substr($qqq3[$i],$xT2+3,$zT2),$odpowiedzi[$inter]))
                            echo '<li id="gitgut">'.substr($qqq3[$i],$xT2+3,$zT2).'</li>';
                        else
                            echo '<li>'.substr($qqq3[$i],$xT2+3,$zT2).'</li>';
                        if(strpos(substr($qqq3[$i],$xT3+3,$zT3),$odpowiedzi[$inter]))    
                            echo '<li id="gitgut">'.substr($qqq3[$i],$xT3+3,$zT3).'</li>';
                        else
                            echo '<li>'.substr($qqq3[$i],$xT3+3,$zT3).'</li>';
                        if(strpos(substr($qqq3[$i],$xT4+3,$zT4),$odpowiedzi[$inter]))
                            echo '<li id="gitgut">'.substr($qqq3[$i],$xT4+3,$zT4).'</li>';
                        else
                            echo '<li>'.substr($qqq3[$i],$xT4+3,$zT4).'</li>';
                echo '</ol>';
                echo '</section>';
         }
                if($i == 40){
                    echo $pytania[$i-1];
                    echo '<section id="qqq">';
                        echo '<ol type="A">';
                            if(strpos(substr($qqq3[$i],$xT+3,$zT),$odpowiedzi[$inter]))
                                echo '<li id="gitgut">'.substr($qqq3[$i],$xT+3,$zT).'</li>';
                            else
                                echo '<li>'.substr($qqq3[$i],$xT+3,$zT).'</li>';
                            if(strpos(substr($qqq3[$i],$xT2+3,$zT2),$odpowiedzi[$inter]))
                                echo '<li id="gitgut">'.substr($qqq3[$i],$xT2+3,$zT2).'</li>';
                            else
                                echo '<li>'.substr($qqq3[$i],$xT2+3,$zT2).'</li>';
                            if(strpos(substr($qqq3[$i],$xT3+3,$zT3),$odpowiedzi[$inter]))    
                                echo '<li id="gitgut">'.substr($qqq3[$i],$xT3+3,$zT3).'</li>';
                            else
                                echo '<li>'.substr($qqq3[$i],$xT3+3,$zT3).'</li>';

                                
                                
                                $ender = strpos(substr($qqq3[$i],$xT4+3,$zT4),'id="side"');
                                $test = substr($qqq3[$i],$xT4+3,$zT4);
                                $test = substr($test,0,$ender);
                                
                            if(strpos(substr($qqq3[$i],$xT4+3,$zT4),$odpowiedzi[$inter]))
                                echo '<li id="gitgut">'.$test.'</li>';
                            else
                                echo '<li>'.$test.'</li>';
                    echo '</ol>';
                    echo '</section>';
                }
                // echo "<textarea>";
                // echo $odpowiedzi[$inter];
                // echo "</textarea>";

                $inter += 1;
            }
           
        }
        echo "<hr>";
        echo "<hr>";

        // for($i = 0; $i<count($pytania);$i++){
        //     echo $pytania[$i];
        //     echo "<br>";
        //     echo "<br>";
        //     echo $odpowiedzi[$i];
        //     echo "<br>";
        //     echo "<hr>";
        // }
    ?>
</body>
</html>



