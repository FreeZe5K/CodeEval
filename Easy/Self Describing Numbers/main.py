import fileinput, functools

for line in fileinput.input( ):
    s, n, self = line.rstrip( '\n' ), int( line ), True
    a, m = [ 0 ] * len( s ), n
    while m > 0:
        v = m % 10
        if v < len( s ):
            a[ v ] += 1
        else:
            self = False
            break
        m //= 10
    if self:
        self = n == functools.reduce( lambda x, y: x * 10 + y, a )
    print( 1 if self else 0 )