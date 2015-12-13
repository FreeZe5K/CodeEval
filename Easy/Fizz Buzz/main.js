var fs = require( "fs" );

fs.readFileSync( process.argv[ 2 ] ).toString( ).split( '\n' ).forEach( function( line ) 
{
    if( "" !== line )
    {
        var final_string    = [ ];
        var parts           = line.split( ' ' );
        var nX              = parts[ 0 ];
        var nY              = parts[ 1 ];

        for( var nIndex = 1; nIndex <= parts[ 2 ]; nIndex++ )
            final_string.push( ( ( 0 === nIndex % nX ) && ( 0 === nIndex % nY ) ) ? 'FB' : ( 0 === ( nIndex % nX ) ) ? 'F' : ( 0 === ( nIndex % nY ) ) ? 'B' : nIndex );

        console.log( final_string.join( ' ' ) );
    }
});