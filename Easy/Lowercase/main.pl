open( my $file, "<", $ARGV[ 0 ] );

while( my $line = <$file> ) 
{
    $line = lc $line;
    print $line;
}

close( $file );