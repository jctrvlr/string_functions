<?php

$csv = array_map('str_getcsv', file('data.csv'));

$password = 'password';
$hash = crypt($password);
echo $hash;

$str = 'This is a string that has a bunch of stuff in it: ';
echo addslashes($str);

$html_str = "A 'quote' is <b>bold</b>";
echo htmlentities($html_str);
echo htmlentities($html_str, ENT_QUOTES);


$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0];
echo $pieces[1];

$md5 = $password;
echo $md5;

$str_spec = "<p>this -&gt; &quot;</p>\n";
echo htmlspecialchars_decode($str_spec);
echo htmlspecialchars_decode($str_spec, ENT_NOQUOTES);

?>
