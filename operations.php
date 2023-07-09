<?php
    function inputFields($placeholder,$name,$value,$type)
    {
        $ele="
        <div class=\"form-group my-4\">
        <input type='$type' name='$name' placeholder='$placeholder' class=\"form-control\" value='$value' autocomplete=\"off\" required>
        </div>
        ";
        echo $ele;
    }
    function radioField($text,$type,$name){
        $ele="
        <p>$text</p>
        <div class=\"form-check\">
        <input class=\"form-check-input\" type='$type' name='$name' id=\"flexRadioDefault1\" value=\"No\">
        <label class=\"form-check-label\" for=\"flexRadioDefault1\">
        No
        </label>
        </div>
        <div class=\"form-check\">
        <input class=\"form-check-input\" type='$type' name='$name' id=\"flexRadioDefault2\" value=\"Yes\" checked>
        <label class=\"form-check-label\" for=\"flexRadioDefault2\">
        Yes
        </label>
        </div>
        ";
        echo $ele;
    }
?>