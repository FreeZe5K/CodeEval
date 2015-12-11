<?php

$file       = fopen( $argv[ 1 ], 'r' );
$numbers    = array
(
    array( '-**--', '*--*-', '*--*-', '*--*-', '-**--', '-----' ),
    array( '--*--', '-**--', '--*--', '--*--', '-***-', '-----' ),
    array( '***--', '---*-', '-**--', '*----', '****-', '-----' ),
    array( '***--', '---*-', '-**--', '---*-', '***--', '-----' ),
    array( '-*---', '*--*-', '****-', '---*-', '---*-', '-----' ),
    array( '****-', '*----', '***--', '---*-', '***--', '-----' ),
    array( '-**--', '*----', '***--', '*--*-', '-**--', '-----' ),
    array( '****-', '---*-', '--*--', '-*---', '-*---', '-----' ),
    array( '-**--', '*--*-', '-**--', '*--*-', '-**--', '-----' ),
    array( '-**--', '*--*-', '-***-', '---*-', '-**--', '-----' )
);

while( false !== ( $line = fgets( $file ) ) )
{
    $current_numbers    = str_split( trim( $line ) );
    $result             = array( );

    foreach( $current_numbers as $current_number )
    {
        if( !is_numeric( $current_number ) )
            continue;

        $result[ ] = $numbers[ $current_number ];
    }

    for( $nIndex = 0; $nIndex < 6; $nIndex++ )
    {
        foreach( $result as $res )
            echo $res[ $nIndex ];

        echo "\n";
    }
}

?>