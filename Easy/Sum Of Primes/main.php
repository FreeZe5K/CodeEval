<?php

$aPrimes    = array( );
$nPrimes    = 0;

for( $nIndex = 1; $nPrimes < 1000; ++$nIndex )
{
    $bPrime = ( 1 == $nIndex ) ? false : true;

    foreach( $aPrimes as $prime )
    {
        if( 0 == $nIndex % $prime && $prime != $nIndex )
        {
            $bPrime = false;
            break;
        }
    }

    if( $bPrime )
    {
        $aPrimes[] = $nIndex;
        $nPrimes++;
    }
}

echo array_sum( $aPrimes );

?>