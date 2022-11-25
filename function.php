<?php
    //จงเขียนชื่อฟังก์ชั่น student name

    function displayName(){
        echo"fadeelah tamoh";
    }

    echo "My Name is";
    displayName();

    echo "<hr color='red'>";

    function addNumber($num1,$num2){
        echo $num1 + $num2;
    }
    addNumber(2,4);

    echo"<hr color='green'>";

    
    function displayStudent($name){
        echo $name;
    }
    displayStudent("fadeelah");

    echo"<hr color='blak'>";

    function powernumber($name,$pow){
        echo $name ** $pow;
    }
    powernumber(10,5);

    echo"<hr color='blue'>";

    function fractionnumber($numerate,$denomerate){
        echo $numerate % $denomerate;
    }
    fractionnumber(17,5);

    echo"<hr color='yellow'>";
?>