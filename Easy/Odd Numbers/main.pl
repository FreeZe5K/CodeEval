@numbers = grep { $_ & 1 } 1..100;

foreach my $number ( @numbers )
{
    print "$number\n";
}