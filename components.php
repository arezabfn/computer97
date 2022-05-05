<?php

function inputElem($background,$icon,$placeholder,$name,$value){
    $ele = "
        <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text {$background}\">$icon</div>
                        </div>
                        <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder=$placeholder class=\"form-control\" 
                        id=\"inlineFormInputGroup\" ></div>
                        
    ";
    echo $ele;
}
function buttonElem($btnid,$styleclass,$text,$name,$attr)
{
$ele="

<button name = '$name''$attr' id='$btnid' class='$styleclass'  >$text</button>

";
echo $ele;
}


?>

