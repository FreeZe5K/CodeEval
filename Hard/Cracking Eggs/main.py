import fileinput

ht = { }

def floors( e, s ):
    if 0 == s or 0 == e:
        return 0
    elif 1 == s:
        return 1
    elif 1 == e:
        return s
    elif s < e:
        return floors( s, s )

    if( e, s ) not in ht:
        ht[ ( e, s )] = floors( e - 1, s - 1 ) + floors( e, s - 1 ) + 1

    return ht[ ( e, s ) ]

for line in fileinput.input( ):
    e, s = [ int( i ) for i in line.split( ) ]
    n = 0

    while floors( e, n ) < s:
        n += 1

    print( n )