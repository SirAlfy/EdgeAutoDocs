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
`55 23 * * * /path/to/yourShellScript`

This code will schedule it to run at 11:55 pm each night.


# Dependencies
Apache *will add links*
Mysql
Php-Mysql
Php
