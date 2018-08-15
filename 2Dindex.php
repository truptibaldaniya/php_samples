<h1 align="center"><u>Matrix</u></h1>
<style>
    td{
        padding:7px;
        text-align:center;
        background-color:#C0C0C0;
    }
    body{
        background-color:skyblue;
    }
</style>
<?php
    $matrix=array(array(rand(0,9),rand(0,9),rand(0,9)),
            array(rand(0,9),rand(0,9),rand(0,9)),
            array(rand(0,9),rand(0,9),rand(0,9)));
    echo "<table align='center'>";
    foreach($matrix as $mat){
        echo "<tr>";
        foreach($mat as $value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>