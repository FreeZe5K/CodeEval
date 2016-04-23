<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $left, $right ) = explode( ';', $line );
    echo join( ',', array_intersect( explode( ',', $left ), explode( ',', $right ) ) ) ."\n";
}

?>