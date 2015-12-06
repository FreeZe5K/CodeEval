<?php

$file       = fopen( $argv[ 1 ], 'r' );
$lines      = array( );
$num_lines  = trim( fgets( $file ) );

while( false !== ( $line = fgets( $file ) ) )
    $lines[] = trim( $line );

usort( $lines, function( $left, $right ) { return strlen( $left ) < strlen( $right ); } );
echo join( array_slice( $lines, 0, $num_lines ), "\n" ) . "\n";

?>