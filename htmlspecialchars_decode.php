<?php
echo 'Output: ';
$str = "<p>this -&gt; &quot;</p>\n";

echo htmlspecialchars_decode($str);

echo htmlspecialchars_decode($str, ENT_NOQUOTES);
?>
<pre>
$str = "&ltp&gtthis -&gt; &quot;&lt/p&gt\n";
echo htmlspecialchars_decode($str);
echo htmlspecialchars_decode($str, ENT_NOQUOTES);
</pre>
