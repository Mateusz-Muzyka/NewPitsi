<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>działa</p>
    <?php 
        $data = file_get_contents('https://wp.pl/');
        
        // preg_match('/<title>([^<]+)<\/title>/i', $data, $titles);
        // $title = $titles[1];
    
        // preg_match('/<img[^>]*src=[\'"]([^\'"]+)[\'"][^>]*>/i', $data, $matches);
        // $img = $matches[1];
        $qqq = explode("<img",$data);
        for($i = 0; $i<count($qqq);$i++){
            echo "<textarea>";
            $x = strpos($qqq[$i], 'src="');
            $y = strpos($qqq[$i], '"',$x+5);
            echo "x=".$x;
            echo "y=".$y;
            echo "<br>";
            $z = $y - $x;
            // echo $z;
            echo substr($qqq[$i],$x,$z);
            echo "</textarea>";
            
        }

        
        
    ?>
</body>
</html>



