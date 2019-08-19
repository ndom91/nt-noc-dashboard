#!/bin/bash

MINUS30="$(date '+%s-15000')"
NOW="$(date '+%s')"

/usr/bin/rrdtool graph - \
--imgformat=PNG \
--start=$MINUS30 \
--end=$NOW \
--title='ae0 - ### 007974 CloudKleyer Trunk , ae1 on CK side ### ; - bits/s' \
--base='1000' \
--height='200' \
--width='510' \
--alt-autoscale-max \
--lower-limit='0' \
--color BACK#303540 \
--color CANVAS#303540 \
--color GRID#5e9f37 \
--color MGRID#5e9f37 \
--color FONT#FFFFFF \
--color FRAME#303540 \
--color AXIS#FFFFFF \
--color SHADEA#303540 \
--color SHADEB#303540 \
COMMENT:"  \n" \
-m '1.2' \
--vertical-label='bps' \
--slope-mode \
--font TITLE:8: \
--font AXIS:6: \
--font LEGEND:7: \
--font UNIT:6: \
DEF:a='/var/lib/cacti/rra/ncex-mx960-b_2_17_bps_in_521.rrd':'bps_in':MAX \
DEF:b='/var/lib/cacti/rra/ncex-mx960-b_2_17_bps_in_521.rrd':'bps_out':MAX \
AREA:a#7EE600FF:'Bits/s In'  \
GPRINT:a:LAST:' Current\:%8.2lf %s'  \
GPRINT:a:AVERAGE:'Average\:%8.2lf %s'  \
GPRINT:a:MAX:'Max\:%8.2lf %s\n'  \
LINE3:b#002A97CC:'Bits/s Out'  \
GPRINT:b:LAST:'Current\:%8.2lf %s'  \
GPRINT:b:AVERAGE:'Average\:%8.2lf %s'  \
GPRINT:b:MAX:'Max\:%8.2lf %s\n' 
