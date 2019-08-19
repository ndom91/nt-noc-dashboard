# NOC Dashboard [Newtelco GmbH]

![Screenshot](https://imgur.com/8tRgSTX.png)

## How-To
- Clone the repo to your local machine    
`git clone https://github.com/ndom91/nt-noc-dashboard`  
- Copy this dir to your web server root (i.e. `/var/www/html/ntdashboard`) and setup a virtualhost in your webserver of choice. 
  - Alternatively, you can use python (`python -m http.server 8080`) or php (`php -S localhost:8080`) to launch a temporary lightweight web server if you have the dev packages of those languages installed!

## Features
- Customizable [Netdata](https://github.com/firehol/netdata) charts  
- Live stream of security cameras  
- Newsticker style display of camera feeds  
  - Chrome only allows 6 simultaneous video feeds per tab per origin. Therefore if you run your own DNS in your company as well, you can trick chrome by pointing various subdomains at the same IP, as is done in `index.php` here.   

## Credit
- Dashboard Framework: [AdminLTE](https://github.com/almasaeed2010/AdminLTE)  
- Data Collection: [Netdata](https://github.com/firehol/netdata)  
- Camera Streaming: [ffmpeg](https://ffmpeg.org)  

### Licence
![GitHub](https://img.shields.io/github/license/ndom91/nt-noc-dashboard)
