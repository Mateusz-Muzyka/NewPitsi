<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 100px;
            height: 100px;
            border: 1px black solid;
            margin-left: 5px;
        }
    </style>
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
        // for($i = 0; $i<count($qqq);$i++){
        //     echo "<textarea>";
        //     $x = strpos($qqq[$i], 'src="');
        //     $y = strpos($qqq[$i], '"',$x+5);
        //     $z = $y+1 - $x;
        //     // echo $z;
        //     echo substr($qqq[$i],$x,$z);
        //     echo "</textarea>";
            
        // }
        for($i = 0; $i<count($qqq);$i++){
            $x = strpos($qqq[$i], 'src="');
            $y = strpos($qqq[$i], '"',$x+5);
            $z = $y+1 - $x;
            $q = substr($qqq[$i],$x,$z);
            echo '<img '.$q.'>';
        }

        
        
    ?>
</body>
</html>



