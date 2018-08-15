<h1><u>List Of Shopping Mall With Its Location</u></h1>
<style>
    td{
        padding:7px;
        text-align:center;
    }
    body{
        background-color:#A569BD;
    }
    .table{
        float:left;
    }
    caption{
        color:white;
    }
    h1{
        color:#145A32;
    }
</style>
<?php
    $mall_nm=array("VR Mall","Crystal mall","Mall De Goa","Empire Mall","DR World","Ahmedabad One","RP Mall","Infinity Mall","World Trade Park");
    $mall_loc=array("Surat","Rajkot","Goa","Bangalore","Surat","Ahmedabad","Kollam","Malad","Jaipur");
    echo "<tr><td><table align='center' border=1 width=25% bgcolor='#85C1E9' class='table' rules='all'>";
    echo "<caption><h3>Name</h3></caption>";
    foreach($mall_nm as $nm){
        echo "<tr><td>$nm</td></tr>";
    }
    echo "</table>";
    echo "<table align='center' border=1 width=25% bgcolor='#85C1E9' rules='all' class='table'>";
    echo "<caption><h3>Location</h3></caption>";
    foreach($mall_loc as $com){
        echo "<tr><td>$com</td></tr>";
    }
    echo "</table>";
?>