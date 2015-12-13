var fs = require( "fs" );

fs.readFileSync( process.argv[ 2 ] ).toString( ).split( '\n' ).forEach( function( line ) {
    if( "" !== line )
        console.log( line.split( ' ' ).reduce( function( left, right ) { return left.length >= right.length ? left: right; }));
});