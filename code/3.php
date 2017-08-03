<?php
    //初始化数组并打印
    $a = array("0"=>"中","1"=>"b国");
    //$a = array('a','b');
    print_r($a);
    echo "</br>";
    //打印单个元素
    echo $a[0];
    echo "</br>";
    //打印数组坐标
    $b = array("0" => "100", "color" => "red");
    print_r($b);
    echo "</br>";
    //打印可选参数值的键名
    $b = array("blue", "green", "blue","blue");
    print_r(array_keys($b,"blue"));
    echo "</br>";
    //无可选参数时返回所有键名
    $b = array("color" =>array("blue", "red", "green"),"size" => array("small", "middle", "large"));
    print_r(array_keys($b));
    echo "</br>";
    print_r($b);
    echo "</br>";
    //定位元素，搜错成功则返回true
    if(in_array("中",$a)){
        echo "Got blue";
         echo "</br>";
    }
    //去掉重复元素
    $input = array("a" => "green", "red", "b" => "green", "blue", "red");
    $result = array_unique($input);
    print_r($result);
    echo "</br>";
    print_r($input);
    echo "</br>";

    
    ?>
