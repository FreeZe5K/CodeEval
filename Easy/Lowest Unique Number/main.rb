File.open( ARGV[ 0 ] ).each_line do |line|
    t = line.split.map( &:to_i )
    s = t.sort

    s.delete( s[ 0 ] ) while s[ 0 ] == s[ 1 ] && s.length > 1
    puts 0 == s.length ? 0 : t.find_index( s[ 0 ] ) + 1
end