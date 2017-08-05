var fs = require( 'fs' );

fs.readFileSync( process.argv[ 2 ] ).toString( ).split( '\n' ).forEach( function( line ) {
    if( '' !== line ) {
        var lists = line.split( /\s+\|\s+/ ), one = lists[ 0 ].split( ' ' ), two = lists[ 1 ].split( ' ' );

        for( var i = one.length; i--; )
            one[ i ] = parseInt( one[ i ], 10 ) * parseInt( two[ i ], 10 );

        console.log( one.join( ' ' ) );
    }
} );
