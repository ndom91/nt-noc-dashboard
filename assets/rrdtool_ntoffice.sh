#!/bin/bash

MINUS30="$(date '+%s-15000')"
NOW="$(date '+%s')"

/usr/bin/rrdtool graph - \
--imgformat=PNG \
--start=$MINUS30 \
--end=$NOW \
--title='NT Office SW2 - Traffic - Port Gi0/1' \
--rigid \
--base='1000' \
--height='200' \
--width='510' \
--alt-autoscale-max \
--lower-limit='0' \
COMMENT:"  \n" \
-m '1.2' \
--color BACK#303540 \
--color CANVAS#303540 \
--color GRID#5e9f37 \
--color MGRID#5e9f37 \
--color FONT#FFFFFF \
--color FRAME#303540 \
--color AXIS#FFFFFF \
--color SHADEA#303540 \
--color SHADEB#303540 \
--vertical-label='bits per second' \
--slope-mode \
--font TITLE:8: \
--font AXIS:6: \
--font LEGEND:7: \
--font UNIT:6: \
DEF:a='/var/lib/cacti/rra/nt_office_sw2_traffic_in_784.rrd':'traffic_in':MAX \
DEF:b='/var/lib/cacti/rra/nt_office_sw2_traffic_in_784.rrd':'traffic_out':MAX \
CDEF:cdefa='a,8,*' \
CDEF:cdefe='b,8,*' \
AREA:cdefa#00CF00FF:'Inbound'  \
GPRINT:cdefa:LAST:' Current\:%8.2lf %s'  \
GPRINT:cdefa:AVERAGE:'Average\:%8.2lf %s'  \
GPRINT:cdefa:MAX:'Maximum\:%8.2lf %s\n'  \
LINE3:cdefe#002A97CC:'Outbound'  \
GPRINT:cdefe:LAST:'Current\:%8.2lf %s'  \
GPRINT:cdefe:AVERAGE:'Average\:%8.2lf %s'  \
GPRINT:cdefe:MAX:'Maximum\:%8.2lf %s\n' 
