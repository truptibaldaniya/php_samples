<h1 align="center"><u>Operators List</u></h1>
<style>
    .table{
        border:1px;
        align:center;
        width:400px;
    }
    th,td{
        padding:7px;
    }
    th{
        background-color:pink;
    }
    td{
        background-color:skyblue;
    }
    body{
        background-color:#C0C0C0;
    }
</style>
<?php
    $operators=array("Arithmetic operator"=>array('-$a'=>'Negation',
                                        '$a + $b'=>'Addition',
                                        '$a - $b'=>'Subtration',
                                        '$a * $b'=>'Multiplication',
                                        '$a / $b'=>'Division',
                                        '$a % $b'=>'modulus'),
                        "Bitwise operator"=>array('$a & $b'=>'And',
                                        '$a | $b'=>'Or(inclusive Or)',
                                        '$a ^ $b'=>'Xor(exclusive)',
                                        '~ $a'=>'Not',
                                        '$a << $b'=>'Shift left',
                                        '$a >> $b'=>'Shift right'),
                        'Comparision operator'=>array('$a == $b'=>'Equal',
                                        '$a === $b'=>'Identical',
                                        '$a != $b'=>'Not equal',
                                        '$a <> $b'=>'Not equal',
                                        '$a !== $b'=>'Not identical',
                                        '$a < $b'=>'Less then',
                                        '$a > $b'=>'Greater then',
                                        '$a <= $b'=>'Less then or equal to',
                                        '$a >= $b'=>'Greater then or equal to'),
                        'Increment/Decrement operator'=>array('++$a'=>'pre-increement',
                                        '$a++'=>'Post-increment',
                                        '--$a'=>'Pre-decrement',
                                        '$a--'=>'Post-decrement'),
                        'Logical operator'=>array('$a and $b'=>'And',
                                        '$a or $b'=>'Or',
                                        '$a xor $b'=>'Xor',
                                        '! $a'=>'Nor',
                                        '$a && $b'=>'And',
                                        '$a || $b'=>'And'),
                        'Array operator'=>array('$a + $b'=>'Union',
                                        '$a == $b'=>'Equality',
                                        '$a === $b'=>'Identity',
                                        '$a != $b'=>'Inequality',
                                        '$a <> $b'=>'Inequality',
                                        '$a !== $b'=>'Non-identity'));
    echo "<table class='table'rules='all' align='center'>";
    foreach($operators as $op=>$details){
        echo "<tr><th colspan=2 align='center'>$op</th></tr>";
        foreach($details as $key=>$value){
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
    }
    echo "</table>";
?>