<?php
	print_r($_POST);
	if(isset($_POST['display']))
	{
		$t=0;
		$a=($_POST['txt']);
		foreach($a as $value)
		{
			
			$t+=$value;
		}
		$avg=$t/15;
		echo "<br>Average of 15 day temprature is : ".round($avg);
		$m=max($a);
		echo "<br>Maximum Temprature is :$m";
		$n=min($a);
		echo "<br>Minimum Temprature is :$n";
	}
?>
<style type="text/css">
<!--
.style1 {
	color: #66CCFF;
	font-size: 24px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<form action="" method="post">

<table align="center">
<tr>
	<td colspan="2" bordercolor="#F0F0F0" bgcolor="#0000CC"><span class="style1">Temperature of last 15 days</span></td>
</tr>
<?php
	for($i=0;$i<15;$i++)
    {
		$j=$i+1;
    	echo "<tr>";
        	echo "<td>Enter $j day temprature : </td>";
            echo "<td><input type='text' name='txt[]'></td>";
        echo "</tr>";
     }
?>
<tr>
	<td colspan="2" align="right"><input type="submit" name="display" value="temperature count"></td>
</tr>
</table>
</form>
