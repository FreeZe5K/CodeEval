#include <stdio.h>

int main( int argc, char** argv )
{
    FILE* fFile         = fopen( argv[ 1 ], "r" );
    int nCurrentNumber  = 0;

    while( fscanf( fFile, "%i", &nCurrentNumber ) && !feof( fFile ) )
        printf( "%i\n", ( nCurrentNumber & 1 ) ? 0 : 1 );

    fclose( fFile );

    return 0;
}