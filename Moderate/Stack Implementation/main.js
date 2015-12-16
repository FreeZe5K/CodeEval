var fs = require( "fs" );

var Stack = function( ) {
    var _stack = [ ];
    
    this.isEmpty    = function( )           { return 0 === _stack.length;           }
    this.pop        = function( )           { return _stack.pop( );                 }
    this.push       = function( element )   { _stack[ _stack.length ] = element;    }
}

fs.readFileSync( process.argv[ 2 ] ).toString( ).split( '\n' ).forEach( function( line ) {
    if( "" !== line ) {
        var _stack  = new Stack( );
        var _ele    = [ ];
        var _pos    = 0;
        var _digits = line.split( ' ' );
        
        for( var index = 0; index < _digits.length; index++ )
            _stack.push( _digits[ index ] );
        
        while( !_stack.isEmpty( ) ) {
            if( 0 === _pos % 2 )
                _ele[ _ele.length ] = _stack.pop( );
            else
                _stack.pop( );
            
            _pos++;
        }
        
        console.log( _ele.join( ' ' ) );
    }
});