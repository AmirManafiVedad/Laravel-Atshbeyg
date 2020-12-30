<?php
    include_once "jdf.php";
    
    echo date("y")."/". date("m")."/".date("d");
echo gregorian_to_jalali((int)(date("Y")), (int)date("m") ,(int) date("d") , "/");

