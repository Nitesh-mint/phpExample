<?php
//custom error
function customError($errorno,$errstr){
    echo "<b>Error:[$errorno] $errstr</b>";
}
set_error_handler("customError");
// echo($test);
echo (1/0);
?>