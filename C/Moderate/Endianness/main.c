#include <stdio.h>

int main( int argc, char** argv )
{
    int sAddr  = 0x04030201;
    char *pLoc = ( void* )&sAddr;
    printf( ( 1 == pLoc[0] && 2 == pLoc[1] && 3 == pLoc[2] && 4 == pLoc[3] ) ? "LittleEndian" : "BigEndian" );
    return 0;
}