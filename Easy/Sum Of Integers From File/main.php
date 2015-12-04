<?php

$file   = fopen( $argv[ 1 ], 'r' );
$sum    = 0;

while( false !== ( $line = fgets( $file ) ) )
    $sum += trim( $line );

echo $sum;

?>