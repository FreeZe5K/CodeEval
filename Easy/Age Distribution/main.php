<?php

$file   = fopen( $argv[ 1 ], 'r' );
$ranges = array
(
    'Still in Mama\'s arms' => range( 0, 2 ),
    'Preschool Maniac'      => range( 3, 4 ),
    'Elementary school'     => range( 5, 11 ),
    'Middle school'         => range( 12, 14 ),
    'High school'           => range( 15, 18 ),
    'College'               => range( 19, 22 ),
    'Working for the man'   => range( 23, 65 ),
    'The Golden Years'      => range( 66, 100 )
);

while( false !== ( $line = fgets( $file ) ) )
{
    $age_range = 'This program is for humans';
    
    foreach( $ranges as $k => $v )
        if( in_array( $line, $v ) )
            $age_range = $k;
    
    echo $age_range . "\n";
}

?>