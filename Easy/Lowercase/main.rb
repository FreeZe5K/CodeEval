lines = File.readlines( ARGV[ 0 ] )

lines.each do |line|
    puts line.downcase
end