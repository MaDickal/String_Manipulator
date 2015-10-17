<?php

switch ($_POST['method']) {
    case 'Binary to Hexidecimal':
        $result = $stringManip->bin2hex($query);
        break;
    case 'Character Count':
        $result = $stringManip->charCount($query);
        break;
    case 'Split string on spaces':
        $result = $stringManip->spaceExplode($query);
        break;
    case 'Hexidecimal to Binary':
        $result = $stringManip->hex2bin($query);
        break;
    case 'Convert to md5':
        $result = $stringManip->md5hash($query);
        break;
    case 'Convert to sha1':
        $result = $stringManip->shahash($query);
        break;
    case 'Shuffle':
        $result = $stringManip->shuffle($query);
        break;
    case 'Word Count':
        $result = $stringManip->wordCount($query);
        break;
    case 'Reverse':
        $result = $stringManip->reverse($query);
        break;
    case 'Convert to Lowercase':
        $result = $stringManip->lowercase($query);
        break;
    case 'Convert to Uppercase':
        $result = $stringManip->uppercase($query);
        break;
    case 'Capitalize each word':
        $result = $stringManip->capWords($query);
        break;
}

?>
