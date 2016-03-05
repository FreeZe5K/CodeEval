<?php

$file   = fopen( $argv[ 1 ], 'r' );
$status = array( 0 => 'Done', 2 => 'Low', 4 => 'Medium', 6 => 'High', PHP_INT_MAX => 'Critical' );

while( false !== ( $line = fgets( $file ) ) )
{
    $strs   = explode( '|', $line );
    $diff   = levenshtein( trim( $strs[ 0 ] ), trim( $strs[ 1 ] ) );
    echo $status[ $diff > 6 ? PHP_INT_MAX : $diff + ( $diff % 2 ) ] . "\n";
}

?>