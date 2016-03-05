<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $tri    = array( 1 );
    $depth  = (int)trim( $line );
    
    for( $index = 1; $index < $depth; $index++ )
    {
        $curr   = 1;
        $tri[ ] = $curr;
        
        for( $sub_index = 1; $sub_index <= $index; $sub_index++ )
        {
            $curr   = ( $curr * ( $index + 1 - $sub_index ) ) / $sub_index;
            $tri[ ] = $curr;
        }
    }
    
    echo join( ' ', $tri ) . "\n";
}

?>