<?php
    
    function makecoffee($type = array("cappuccino"), $coffeeMaker = NULL)
    {
        $device = is_null($coffeeMaker)? "hands": $coffeeMaker;
        return "Making a cup of ".join(",,",$type)." "."with $device.\n";
    }
    echo makecoffee();
    echo makecoffee(array("cappuccino","lavazza"),"teapot");
    
?>
