<?php
echo 'Output: ';
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated;

var_dump(implode('hello', array()));
?>
<pre>
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated;

var_dump(implode('hello', array()));
</pre>
