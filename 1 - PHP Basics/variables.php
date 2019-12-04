<?php 

$d = "abc";

$abc = "xyz";

echo $$d; // $$d = ${"abc"} == $acb == "xyz"


?>