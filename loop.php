#right angle<br/>
<?php
	for($i=1;$i<=5;$i++){
		for($j=1;$j<=$i;$j++)
		echo '*';
		echo'<br/>';
	}
?>
#right angle<br/>
<?php
	for($i=1;$i<=5;$i++){
		for($j=1;$j<=$i;$j++)
		echo $j;
		echo'<br/>';
	}
?>
#right angle<br/>
<?php
	for($i=1;$i<=5;$i++){
		for($j=1;$j<=$i;$j++)
		echo $i;
		echo'<br/>';
	}
?>
#right angle<br/>
<?php
	$k=1;
	for($i=1;$i<=4;$i++){
		for($j=1;$j<=$i;$j++)
		echo $k++;
		echo'<br/>';
	}
?>
----------------------------------------------------------------------<br/>
#pyramid<br/>
<?php
	$rows = 4;
	$spc=$rows+4-1;
	$t=1;
   for($i=1;$i<=$rows;$i++)
   {
        for($k=$spc;$k>=1;$k--)
            {
              echo "&nbsp; ";
            }
	   	for($j=1;$j<=$i;$j++)
		echo $t++ .'&nbsp;';
		echo"<br/>";
    $spc--;
   }
?>
#pyramid<br/>
<?php
	$rows = 4;
	$spc=$rows+4-1;
   for($i=1;$i<=$rows;$i++)
   {
        for($k=$spc;$k>=1;$k--)
            {
              echo "&nbsp; ";
            }
	   	for($j=1;$j<=$i;$j++)
		echo '* ';
		echo"<br/>";
    $spc--;
   }
?>
#pyramid<br/>
<?php
	$rows = 4;
	$spc=$rows+4-1;
   for($i=1;$i<=$rows;$i++)
   {
        for($k=$spc;$k>=1;$k--)
            {
              echo "&nbsp; ";
            }
	   	for($j=1;$j<=$i;$j++)
		echo $i.'&nbsp;';
		echo"<br/>";
    $spc--;
   }
?>
--------------------------------------------------<br/>
#pyramid<br/>
<?php
	$rows = 4;
   for($i=0;$i<=$rows;$i++)
   {	
        for($j=1;$j<=$rows-$i;$j++)
            echo "    &nbsp;";
	   	for($j=1;$j<=2*$i-1;$j++)
			echo "*";
			echo "<br/>";	
    $spc--;
   }
?>