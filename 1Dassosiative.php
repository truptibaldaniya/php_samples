<h1 align="center"><u>Mobile Companies</u></h1>
<style>
    td{
        padding:7px;
        text-align:center;
    }
    body{
        background-color:#F0B27A;
    }
</style>
<?php
    $m_company=array(1=>"Samsung",2=>'Apple',3=>'Sony',4=>'LG',5=>'Nokia',6=>'HTC',7=>'Motorola',8=>'Huawei',9=>'Ximi');
    echo "<table align='center' border=1 width=35% bgcolor='#82E0AA'>";
    echo "<tr><th>No.</th><th>Name</th></tr>";
    foreach($m_company as $key=>$com){
        echo "<tr><td>$key</td><td>$com</td></tr>";
    }
    echo "</table>"
?>