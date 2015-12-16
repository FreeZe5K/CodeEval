var fs      = require( "fs" );
var lines   = fs.readFileSync( process.argv[ 2 ] ).toString( ).split( '\n' );
var len     = parseInt( lines.shift( ) );

lines.sort( function( left, right ) { return right.length - left.length; } );

for( var index = 0; index < len; index++ )
    console.log( lines[ index ] );