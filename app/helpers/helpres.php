<?php

    function showdate ($carbon, $format = "d M Y @ H:i"){
        return $carbon->translatedFormat($format);
    }

?>
