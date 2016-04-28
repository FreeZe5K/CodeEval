<?php

$file = fopen( $argv[ 1 ], 'r' );

while( false !== ( $line = fgets( $file ) ) )
{
    $data   = json_decode( trim( $line ) );
    $sum    = 0;

    foreach( $data->menu->items as $item )
        if( is_object( $item ) && isset( $item->label ) )
            $sum += $item->id;

    echo $sum . "\n";
}

?>