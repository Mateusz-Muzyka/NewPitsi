




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section {
            border: 1px solid black;
            padding: 10px;
            margin:10px;
        }
        .odpgood{
            background-color: green;
        }
    </style>
</head>
<body>
    
        <form action="" method="POST">
            <input type="file" name="file">
            <button type="submit" name="submit">Prześlij</button>
        </form>
        <form method="POST">
        <button id="dbguzik" name="dodaj" value="true">Dodaj do Bazy Danych </button>
        </form>

<?php
    $Atresc = ["q"];
    $Aodpa = ["q"];
    $Aodpb = ["q"];
    $Aodpc = ["q"];
    $Aodpd = ["q"];
    $Acorrect = ["q"];
    $Aimg = ["q"];


    print_r($_POST);
    $serwer = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "inf03quiz";

    $file = "";
    $data = "";
    
    if (!empty($_POST['file'])) {
        echo "NOT_EMPTY";
        $file = $_POST['file'];
    }

    

    if ($file == true){
    $data = file_get_contents("$file");
    } else {
        echo "Wybierz plik";
    }
    echo ($file);

    echo "<textarea>" . $data . "</textarea>"; 

    echo "<hr>";

    $pytania = explode('"trescE">',$data);

    for ($i = 1; $i < count($pytania); $i++) {
        // $posStart = strpos($pytania[$i], '<a href="');
        $posEnd = strpos($pytania[$i], '<div class="sep">');
        
        $pytanie = substr($pytania[$i], 0, $posEnd);
        
        $tEnd = strpos($pytania[$i], '</div');
        $tStart = strpos($pytania[$i], '.');
        $tStart = $tStart + 2;
        $Finale = $tEnd - $tStart;
//output 
        $tresc = substr($pytania[$i], $tStart , $Finale);

        // echo '<textarea>' . $tresc . "</textarea>";
        echo '<section>' . $tresc;
       
        


       //obrazek output
       $img="";
       
       

      
       
       $imgStart = strpos($pytanie, 'src="Egzamin_01_files/');
       $imgEnd = strpos($pytanie, '" alt');
       if ($imgStart) {
        //obrazek output
        $img = substr($pytanie, $imgStart + 22, $imgEnd - $imgStart -22);
        
        //echo "<textarea>" . $img . "</textarea>";
        echo '<img src="Egzamin_01_files/'.$img.'" alt="placeholder">';
      }
       
        

      $correct = "";

    //   function myMessage() {
    //     echo "A";
    //   }
      

    //   myMessage();

        //odp

        echo '<ol type="A">';

        //odp.A

        $odpAStart = strpos($pytanie, 'A. </strong>');
        $odpAEnd = strpos($pytanie, '<div id="odpb');
        //sprawdzenie prawidlowej odpowiedzi
        $odpAfull = substr($pytanie, $odpAStart - 20, $odpAEnd - $odpAStart - 12);
        // echo "<textarea>".$odpAfull."</textarea>";
        $correctStart = strpos($odpAfull, 'odpg');
        if($correctStart){
            //echo "znaleziono output";
            $correct = "A";
        
            
        }
        //output
        $odpA = substr($pytanie, $odpAStart + 12, $odpAEnd - $odpAStart - 18);

        echo "<li ";
        
        if ($correct == "A") echo "class = 'odpgood'";

        echo ">" . $odpA . "</li>";
       
        //odp.B

        $odpBStart = strpos($pytanie, 'B. </strong>');
        $odpBEnd = strpos($pytanie, '<div id="odpc');

        $odpBfull = substr($pytanie, $odpBStart - 20, $odpBEnd - $odpBStart - 12);
        // echo "<textarea>".$odpBfull."</textarea>";
        $correctStart = strpos($odpBfull, 'odpg');
        if($correctStart){
            //echo "B //output";
            $correct = "B";
          
            
        }
            
        //output
        $odpB = substr($pytanie, $odpBStart + 12, $odpBEnd - $odpBStart - 18);

        echo "<li ";
        
        if ($correct == "B") echo "class = 'odpgood'";

        echo ">" . $odpB . "</li>";
       
        // odp.C
        $odpCStart = strpos($pytanie, 'C. </strong>');
        $odpCEnd = strpos($pytanie, '<div id="odpd');

        $odpCfull = substr($pytanie, $odpCStart - 20, $odpCEnd - $odpCStart - 12);
        // echo "<textarea>".$odpCfull."</textarea>";
        $correctStart = strpos($odpCfull, 'odpg');
        if($correctStart){
            //echo "C//output";
            $correct = "C";
           
            
        }
            
        
        //output
        $odpC = substr($pytanie, $odpCStart + 12, $odpCEnd - $odpCStart - 18);

        echo "<li ";
        
            if ($correct == "C") echo "class = 'odpgood'";

        echo ">" . $odpC . "</li>";
     
        // odp.D
        if($i === count($pytania) - 1){
            $stripped = explode('<div class="col-md-3" id="side" data-aos="fade-up">',$pytanie)[0];
            $odpDStart = strpos($stripped, 'D. </strong>');

            $odpDfull = substr($stripped, $odpDStart - 18);

            // echo "<textarea>".$odpDfull."</textarea>";

            $correctStart = strpos($odpDfull, 'odpg');
            if($correctStart){
                //echo "D//output";
                
            
            }
            //output
            $odpD = substr($stripped, $odpDStart + 12, -6);
    
            echo "<li ";
            
            if ($correct == "D") echo "class = 'odpgood'";
            
            echo ">" . $odpD . "</li>";
            
        } else {
            $odpDStart = strpos($pytanie, 'D. </strong>');

            $odpDfull = substr($pytanie, $odpDStart - 18);

            // echo "<textarea>".$odpDfull."</textarea>";

            $correctStart = strpos($odpDfull, 'odpg');
            if($correctStart){
                //echo "D//output";
                
               
            }
            //output
            $odpD = substr($pytanie, $odpDStart + 12, -6);
    
            echo "<li ";
            
            if ($correct == "D") echo "class = 'odpgood'";
    
            echo ">" . $odpD . "</li>";
            
            
            
        }

        echo '</ol>';
        echo "</section>";
        echo "dodawanie";
        
      
        
    }
      // $con = new mysqli($serwer, $user, $pass, $dbname);

    // if($con -> connect_errno){
    //     echo "błąd".$con -> connect_errno;
    //     exit();
    // }

    // $sql = "INSERT INTO qna (tresc, odpa, odpb,odpc,odpd,poprawna) VALUES ("..")"
    

if(isset($_POST['dodaj'])){
            if($_POST['dodaj']){
                echo $Atresc[1];
            }else{
                echo "naha";
            }
        }
 ?>

</body>
</html>
