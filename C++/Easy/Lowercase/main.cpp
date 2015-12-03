#include <iostream>
#include <string>

int main( int argc, char** argv )
{
    FILE* fFile = fopen( argv[ 1 ], "r" );
    char* szLine = "";

    while( std::getline( fFile, std::tolower( szLine ) ) )
        std::cout << szLine << "\n";

    return 0;
}