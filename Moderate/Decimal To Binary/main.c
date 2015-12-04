#include <stdio.h>

void PrintBin( int n )
{
    if( n )
    {
        PrintBin( n >> 1 );
        printf( "%i", ( n & 1 ) );
    }
}

int main( int argc, char** argv )
{
    FILE* fFile = fopen( argv[ 1 ], "r" );
    int nCurrentNumber = 0;

    while( fscanf( fFile, "%i", &nCurrentNumber ) && !feof( fFile ) )
    {
        if( 0 == nCurrentNumber )
            printf( "0" );
        else
            PrintBin( nCurrentNumber );

        printf( "\n" );
    }

    fclose( fFile );

    return 0;
}