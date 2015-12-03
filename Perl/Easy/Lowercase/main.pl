open( my $file, "<", $ARGV[ 0 ] );

while( my $line = <$file> )
{
    $line = lc $line;
    print "$line\n";
}

close( $file );