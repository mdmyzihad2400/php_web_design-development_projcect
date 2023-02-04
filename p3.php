<?php include ("header.php");?>

<div class="main">
    <div style="padding:10px 0px 0px 50px; color:black ">
        <h1>Largest number Find Out.</h1>

        <?php
        $a = 600;
        $b = 10000;
        $c = 100;
        $d = 50000;

        if($a>$b and $a>$c and $a>$d) {
            echo("The largest number is $a <br>");
        }elseif($b>$a and $b>$c and $b>$d) {
            echo("The largest number is $b <br>");
        }elseif($c>$a and $c>$b and $c>$d) {
            echo("The largest number is $c <br>");
        }else{
            echo("The largest number is $d <br>");
        }

        if($b==50000){
            echo("The value of B = $b <br>");
        }

        if($b==10000){
            echo("The value of B = $b <br>");
        }else{
            echo("The value of B = Wrong <br>"); 
        }



        ?>
        <h1>Smallest number Find Out.</h1>
        <?php
        if($a<$b and $a<$c and $a<$d) {
            echo("The smallest number is $a <br>");
        }elseif($b<$a and $b<$c and $b<$d) {
            echo("The smallest number is $b <br>");
        }elseif($c<$a and $c<$b and $c<$d) {
            echo("The smallest number is $c <br>");
        }else{
            echo("The smallest number is $d <br>");
        }

        ?>
</div>

</div>
        
<?php include ("footer.php");?>
