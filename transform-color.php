<?php
// //var rgbToHex = function (rgb) { 
//     var hex = Number(rgb).toString(16);
//     if (hex.length < 2) {
//          hex = "0" + hex;
//     }
//     return hex;
//   };

?>
<?php 
// $hex = "#ff9900"; list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); echo "$hex -> $r $g $b";
 ?> 

<?php

function hexToRgb($hex, $alpha = false) {
    $hex      = str_replace('#', '', $hex);
    $length   = strlen($hex);
    $rgb['r'] = hexdec($length == 6 ? substr($hex, 0, 2) : ($length == 3 ? str_repeat(substr($hex, 0, 1), 2) : 0));
    $rgb['g'] = hexdec($length == 6 ? substr($hex, 2, 2) : ($length == 3 ? str_repeat(substr($hex, 1, 1), 2) : 0));
    $rgb['b'] = hexdec($length == 6 ? substr($hex, 4, 2) : ($length == 3 ? str_repeat(substr($hex, 2, 1), 2) : 0));
    if ( $alpha ) {
       $rgb['a'] = $alpha;
    }
    return $rgb;
 }
var_dump(hexToRgb("#ff9900"));
?>