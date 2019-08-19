#!/bin/bash


sudo bash /home/ndo/scripts/rrdtool_b217.sh > /home/ndo/scripts/output/b217_cloudkleyer.png
scp -i /home/ndo/.ssh/id_newtelco_daten /home/ndo/scripts/output/b217_cloudkleyer.png newtelco@192.168.1.239:/opt/newtelco-daten/IT/newtelco_dashboard/assets/img/b217_cloudkleyer.png

sudo bash /home/ndo/scripts/rrdtool_eshelter.sh > /home/ndo/scripts/output/eshelter.png
scp -i /home/ndo/.ssh/id_newtelco_daten /home/ndo/scripts/output/eshelter.png newtelco@192.168.1.239:/opt/newtelco-daten/IT/newtelco_dashboard/assets/img/eshelter.png

sudo bash /home/ndo/scripts/rrdtool_ntoffice.sh > /home/ndo/scripts/output/ntoffice.png
scp -i /home/ndo/.ssh/id_newtelco_daten /home/ndo/scripts/output/ntoffice.png newtelco@192.168.1.239:/opt/newtelco-daten/IT/newtelco_dashboard/assets/img/ntoffice.png

