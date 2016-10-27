<?php
echo 'Output: ';
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other
text</a>';
echo strip_tags($text);
echo "\n";

// Allow <p> and <a>
echo strip_tags($text, '<p><a>');
?>
<pre>
$text = '&ltp>Test paragraph.&lt/p>&lt!-- Comment --> &lta href="#fragment">Other
text&lt/a>';
echo strip_tags($text);
echo "\n";

// Allow &ltp> and &lta>
echo strip_tags($text, '&ltp>&lta>');
</pre>
