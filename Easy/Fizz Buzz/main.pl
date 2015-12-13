open( my $file, "<", $ARGV[ 0 ] );

while( my $line = <$file> ) 
{
    my @lineValues  = split ' ', $line;
    my $divX        = shift @lineValues;
    my $divY        = shift @lineValues;
    my $lenN        = shift @lineValues;
    
    for( 1 .. $lenN )
    {
        print $_ unless( 0 == $_ % $divX ) || ( 0 == $_ % $divY );
        print ( ( 0 == $_ % $divX ? "F" : "" ) . ( 0 == $_ % $divY ? "B" : "" ) ) . " ";
    }
    
    print "\n";
}

close( $file );