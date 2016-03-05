<?php

$file   = fopen( $argv[ 1 ], 'r' );
$btree  = array( 3  => 8, 8  => 30, 10 => 20, 20 => 8, 29 => 20, 30 => null, 52 => 30 );

while( false !== ( $line = fgets( $file ) ) )
{
    list( $num1, $num2 ) = explode( ' ', trim( $line ) );
    $found = false;
    
    while( $num1 && $num1 != $num2 )
    {
        $num2p = $num2;
        
        while( $num2p )
        {
            if( $num1 == $num2p )
            {
                $found = true;
                break 2;
            }
            
            $num2p = $btree[ $num2p ];
        }
        
        $num1 = $btree[ $num1 ];
    }
    
    echo $num1 . "\n";
}

?>