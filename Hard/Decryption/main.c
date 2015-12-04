#include <stdio.h>

int main( int argc, char** argv )
{
    const char* szKeyedAlphabet = "BHISOECRTMGWYVALUZDNFJKPQX";
    const char* szMessage       = "012222 1114142503 0313012513 03141418192102 0113 2419182119021713 06131715070119";
    char cAlphaPos[ 26 ]        = { 0 };
    char cIndex                 = 0;

    for( cIndex; cIndex < 26; ++cIndex )
        cAlphaPos[ szKeyedAlphabet[ cIndex ] - 'A' ] = cIndex + 'A';

    cIndex = 0;

    while( szMessage[ cIndex ] )
    {
        if( ' ' == szMessage[ cIndex ] )
            printf( " " );
        else
        {
            char cCode  = ( szMessage[ cIndex++ ] - '0' ) << 1;
            cCode       += ( cCode << 2 ) + ( szMessage[ cIndex ] - '0' );
            printf( "%c", cAlphaPos[ cCode ] );
        }

        cIndex++;
    }

    return 0;
}