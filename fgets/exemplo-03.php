<?php 

function fun ($n) {

	$x=1;
	if($n===1) return $x;

	for($k=1; $k<$n; $k++) {
		$x = $x + fun($k) * fun($n-$k);
	}

	return $x;
}

echo fun(5);

?>