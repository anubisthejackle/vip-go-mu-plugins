<?php

function your_function() {
	echo 'TEST: THIS IS TEST 2';
}
add_action( 'wp_footer', 'your_function' );
