#include <stdio.h>

int main( int argc, char** argv )
{
    int nIndex  = 1;
    int nPrimes = 0;
    int nTotal  = 0;

    for( nIndex; nPrimes < 1000; ++nIndex )
    {
        int nPrime      = ( 1 == nIndex ) ? 0 : 1;
        int nPrimeIndex = 2;

        for( nPrimeIndex; nPrimeIndex < nIndex; nPrimeIndex++ )
        {
            if( nIndex % nPrimeIndex == 0 && nPrimeIndex != nIndex )
            {
                nPrime = 0;
                break;
            }
        }

        if( nPrime )
        {
            nTotal += nIndex;
            nPrimes++;
        }
    }

    printf( "%i\n", nTotal );

    return 0;
}