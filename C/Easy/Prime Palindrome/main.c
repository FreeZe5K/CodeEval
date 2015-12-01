#include <stdio.h>

int main( int argc, char** argv )
{
    int nIndex = 1000;

    for( nIndex; nIndex >= 0; nIndex-- )
    {
        int nPalindrome = ( ( nIndex / 100 ) == ( nIndex - ( nIndex / 100 ) * 100 - ( ( nIndex - ( nIndex / 100 ) * 100 ) / 10 ) * 10 ) ) ? 1 : 0;
        int nPrime      = 1;
        int nPrimeIndex = 2;

        for( nPrimeIndex; nPrimeIndex < nIndex; nPrimeIndex++ )
        {
            if( nIndex % nPrimeIndex == 0 && nPrimeIndex != nIndex )
            {
                nPrime = 0;
                break;
            }
        }

        if( nPrime && nPalindrome )
        {
            printf( "%i\n", nIndex );
            break;
        }
    }

    return 0;
}