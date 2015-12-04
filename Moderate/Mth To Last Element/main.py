import sys

for line in open( sys.argv[ 1 ] ):
    parts   = line.split( )
    mth     = int( parts.pop( ) )
    
    if len( parts ) >= mth:
        print( parts[ -mth ] )