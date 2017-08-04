var fs = require( "fs" );

fs.readFileSync( process.argv[ 2 ] ).toString( ).split( '\n' ).forEach( function( line ) {
    if( "" !== line ) {
        var output  = '';
        var roman   = [ 'M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I' ];
        var arabic  = [ 1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1 ];

        for( var index = 0; index < roman.length; index++ ) {
            while( line >= arabic[ index ] ) {
                output += roman[ index ];
                line -= arabic[ index ];
            }
        }

        console.log( output );
    }
} );
