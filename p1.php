<?php include ("header.php");?>

<div class="main">


        <div class="pro1" style="padding: 10px 0px 0px 50px; color: black;">


        <h1> This is My First Project.</h1>
	
	1.rasel <br />
	2.salman <br />
	3.Hamim <br />
	4.rakib <br />
	
	Add= 2000+3000+5000+4000 <br />
	
	
	<?php
	
	$rasel=2000;
	$salman=3000;
	$hamim=5000;
	$rakib=4000;
	
	$add= $rasel+$salman+$hamim+$rakib;
	echo($add);
	
	?>
	<br />
	Sum (যোগ) = <?php $sum=$salman+$hamim; echo($sum);?> <br />
	Sub (বিয়োগ) = <?php $sub= $rakib-$rasel; echo($sub);?> <br />
	Mul (গুন) = <?php $mul = $rasel*$salman+$hamim*$rakib; echo($mul);?> <br />
	Div(ভাগ) = <?php $div = $rakib/$rasel; echo($div);?> <br />
	Mud(ভাগশেষ) = <?php $mud = $salman%$hamim; echo($mud);?> <br />

    </p>
 </div>
       


















 
</div>
        
<?php include ("footer.php");?>
