<?php include ("header.php");?>

<div class="main">
        
       

 <div class="pro2" style="padding: 10px 0px 0px 50px; color: black;">


 <h1> Triangle Area </h1>
	<p> 
			Length = 50
			Width = 30 <br />
			Area (আয়তক্ষেত্রের ক্ষেত্রফল) = <?php $length=50; $width=30;
			$area=$length*$width; echo($area);?> <br />
			
	</p>
	
	
	<h1> Rectangle Area </h1>
	<p>
			Height = 80
			Land = 50 <br />
			Area (ত্রিভুজের ক্ষেত্রফল) = <?php $height=80; $land=50; 
			$area= (1/2)*$land*$height; echo($area);?>
			
	</p>
	
	       <h1> Circle Area </h1>
	 <p>
			Radius = 8 <br />
			Area (বৃত্তের ক্ষেত্রফল) = <?php $radius=8; $pi=3.1416;
			$ciarea= $pi*$radius*$radius; echo($ciarea);?>
	

	</p>
	
	
<h1> Average  </h1>

<p>
	1.Mathe = 80 <br>
	2. Physics = 95 <br>
	3. Chemesty = 88 <br>
	4. Biology = 85 <br>
	5. English = 90 <br>

	Average ( গড় নাম্বার ) = <?php $mathe=80; $physics=95; $chemesty=88; $biology=85; $english=90; 
	$average= ($mathe+$physics+$chemesty+$biology+$english)/5; echo($average);?>

    </p>
 </div>












 

        
</div>
        
<?php include ("footer.php");?>
