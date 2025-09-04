<?php
$numbers = array(10,20,30,40,50);
$search = 20;
if(in_array($search,$numbers)) {
    echo "$search exists in the array.";
}else{
    echo "$search does not exit in the array.";
}

?>