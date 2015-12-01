#include <stdio.h>

int main( int argc, char** argv )
{
    FILE* fFile         = fopen( argv[ 1 ], "r" );
    int nCurrentNumber  = 0;
    int nLineTotal      = 0;

    while( fscanf( fFile, "%i", &nCurrentNumber ) && !feof( fFile ) )
    {
        while( nCurrentNumber != 0 )
        {
            nLineTotal += nCurrentNumber % 10;
            nCurrentNumber /= 10;
        }

        printf( "%i\n", nLineTotal );
        nLineTotal = 0;
    }

    fclose( fFile );

    return 0;
}