<?php include ("header.php");?>

<div class="main">
    <div style="padding:10px 0px 0px 50px; color:black;">
        <h1>Loop Syntax.</h1>


        <?php
        
        echo ("For Loop <br>");
        for($x = 2; $x<=10; $x=$x+2){
            echo("$x <br>");
        }

        echo ("While Loop <br>");
        while($x<=10){
            echo("$x <br>");
            $x=$x+2;
        }

        echo ("Do While Loop <br>");
        $x = 2;
        do{
            echo("$x <br>");
            $x=$x+2;
        }while($x<=10);

        echo ("For each loop <br>");
        $array = array(2,4,6,8,10);
        foreach($array as $value){
            echo("$value <br>");
        }
    
        ?>




  

    </div>



















</div>

<?php include ("footer.php");?>
                                  