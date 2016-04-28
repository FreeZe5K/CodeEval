<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $sequences  = explode( ' ', trim( $line ) );
    $binary     = '';
    
    while( !empty( $sequences ) )
    {
        $flag   = array_shift( $sequences );
        $seq    = array_shift( $sequences );
        $binary .= ( ( '0' === $flag ) ? $seq : str_repeat( '1', strlen( $seq ) ) );
    }
    
    echo bindec( $binary ) . "\n";
}

?>