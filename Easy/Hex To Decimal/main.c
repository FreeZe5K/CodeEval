#include <stdio.h>

int main( int argc, char** argv )
{
    FILE* fFile = fopen( argv[ 1 ], "r" );
    int nCurrentNumber = 0;

    while( fscanf( fFile, "%x", &nCurrentNumber ) && !feof( fFile ) )
        printf( "%d\n", nCurrentNumber );

    fclose( fFile );
}