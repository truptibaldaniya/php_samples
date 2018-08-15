<?php
    print_r($_POST);
    if(isset($_POST['disp'])){
        $func=array('array'=>array('str()','abc()'),
                    'string'=>array('str1()','pre()'),
                    'date'=>array('date()','vcv()')
    );

        $r=$_POST['r1'];
        foreach($func as $key=>$values){
        if($r==$key){
            foreach($values as $val)
            echo $val;
        }
    }
    }
?>
<form method="post">
Array List
<br>
Choss Any Categary:
<input type="radio" name="r1" value="array">Array
<input type="radio" name="r1" value="date">Date
<input type="radio" name="r1" value="string">String
<input type="submit" name="disp" value="disp">
</form>