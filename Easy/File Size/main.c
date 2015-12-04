#include <stdio.h>

int main( int argc, char** argv )
{
    FILE* fFile = fopen( argv[ 1 ], "rb" );

    fseek( fFile, 0, SEEK_END );
    printf( "%i\n", ftell( fFile ) );
    fclose( fFile );

    return 0;
}