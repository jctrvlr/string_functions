<?php
echo 'Output: ';
$str = "A 'quote' is <b>bold</b>";
echo htmlentities($str);

echo htmlentities($str, ENT_QUOTES);
?>
<pre>
$str = "A 'quote' is &ltb&gtbold&lt/b&gt";
echo htmlentities($str);
echo htmlentities($str, ENT_QUOTES);
</pre>
