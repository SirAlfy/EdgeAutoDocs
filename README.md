# EdgeAutoDocumentation
Documentation of my portion of the EdgeAuto Project
# Initial Setup

Pull from my github

`git clone https://github.com/SirAlfy/EdgeAutoDocumentation.git`

Navigate to that folder

`cd EdgeAutoDocumentation`

Run the bash file to start installing the dependencies

`sh edgeautoSetup.sh`

After installation you are able to run the socket. I would recommend doing this in a screen

`Screen -S PhpSocket`

followed by running the socket.

`php serverSocket.php`

To send the data to our Datacenter run the following command to execute it once

`php writeToNas.php`

or you can schedule it by editing your crontab job.

`sudo crontab -e`

Then put the following in with the following format

`Minute(0-59) Hour(0-23) Day(1-31) Month(1-12) Day of Week (0-6)(0=Sunday) /path/to/yourShellScript`

This code will schedule it to run at 11:55 pm each night.

`55 23 * * * /path/to/yourShellScript`


# Dependencies
Apache : https://httpd.apache.org/download.cgi#apache24

Mysql : https://dev.mysql.com/downloads/file/?id=482330

Php-Mysql : https://dev.mysql.com/downloads/repo/apt/

Php : https://www.php.net/distributions/php-7.0.33.tar.gz
