<?php // mysql syntaxfunction mysql_escape_mimic($inp) {     if(is_array($inp))         return array_map(__METHOD__, $inp);     if(!empty($inp) && is_string($inp)) {         return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);     }     return $inp; }// mysql syntaxfunction escape_mimic($inp) {     if(is_array($inp))         return array_map(__METHOD__, $inp);     if(!empty($inp) && is_string($inp)) {         return str_replace(array("</html>", "</body>", "//", "/*", "*/", '\0', "<script>", "<!--", "-->", "<?php", "?>", '\x1a', '\r', '\n'), array(" ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", "<br> ", "<br> "), $inp);     }     return $inp; }?>