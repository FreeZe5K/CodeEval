var fs = require( "fs" );

fs.readFileSync( process.argv[ 2 ] ).toString( ).split( '\n' ).forEach( function( line ) {
    if( "" !== line )
        console.log( /^([^ @"<>]+|".*")@[a-z0-9.]+.[a-z]+$/.test( line ) ? 'true' : 'false' );
});