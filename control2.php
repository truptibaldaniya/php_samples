<style>
.select-selected {
  border: none;
  font-size:17px;
  font-weight:300;
}
.content{
    box-shadow:0 0 5px 2px rgba(0,0,0,.3);
}
</style>
<h1 align="center"><u>Employee Information</u></h1>
<?php
    if(isset($_POST['submit'])){
        //print_r($_POST);
        $fcolor=$_POST['fcol'];
        $bcolor=$_POST['bcol'];
        $infos=array("Employee Id Is:"=>$_POST['eid'],
                    "Employee Name Is:"=>$_POST['ename'],
                    "Employee Salary is:"=>$_POST['sal'],
                    "Employee Designation Is:"=>$_POST['des'],
                    "Employee Date Of Birth:"=>$_POST['dob']);
        echo "<table rules='none' align='center' cellpadding='10px' border=1 bgcolor='$fcolor' class='content'>";
        echo "<body bgcolor='$bcolor'>";
        foreach($infos as $key=>$info){
            echo "<tr><td>$key</td><td><input type='text' value='$info' class='select-selected' readonly></td></tr>";
        }
        echo "</table>";
    }
?>
</body>
