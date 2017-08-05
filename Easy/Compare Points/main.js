var fs = require( 'fs' );

fs.readFileSync( process.argv[ 2 ] ).toString( ).split( '\n' ).forEach( function( line ) {
    if( '' !== line ) {
        var coords   = line.split( ' ' ).map( ( n ) => parseInt( n, 10 ) );
        var output   = coords[ 3 ] < coords[ 1 ] ? 'S' : ( coords[ 3 ] > coords[ 1 ] ? 'N' : '' );
        output      += coords[ 2 ] < coords[ 0 ] ? 'W' : ( coords[ 2 ] > coords[ 0 ] ? 'E' : '' );

        console.log( output || 'here' );
    }
} );
