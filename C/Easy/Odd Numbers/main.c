#include <stdio.h>

int main( int argc, char** argv )
{
    int nIndex = 0;

    for( nIndex = 1; nIndex <= 99; nIndex += 2 )
        printf( "%i\n", nIndex );

    return 0;
}