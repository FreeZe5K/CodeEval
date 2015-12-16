var fs = require( "fs" );

fs.readFileSync( process.argv[ 2 ] ).toString( ).split( '\n' ).forEach( function( line ) {
    if( "" !== line ) {
        var _digits = line.split( ' ' );
        var _mth    = _digits.splice( _digits.length - 1, _digits.length )[ 0 ];
        
        if( _mth <= _digits.length )
            console.log( _digits[ _digits.length - _mth ] );
    }
});