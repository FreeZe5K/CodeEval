<?php

echo ( 0x00FF === current( unpack( 'v', pack( 'S', 0x00FF ) ) ) ) ? 'LittleEndian' : 'BigEndian';

?>