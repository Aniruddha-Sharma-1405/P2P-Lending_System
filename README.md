# P2P-Lending_System
Install mySQL and H2 database.

Start the mySQL database by:
'''sh
$ mysql.server start
'''
$ mysql

After the terminal enters mysql command interface.

CREATE DATABASE lender;
use lender;
SOURCE /path/to/githubclone/database.sql;

Now you have the database loaded in.

Go to R3 Corda github Repo and download samples-java repo. Download h2 server.
Launch the nodes of R3 Corda Environment and take their database url to connect them to h2.

go to h2 folder --> bin folder

bash h2.sh

Put the PartyB localhost jdbc server address.


Now We are ready to start the project.

Open new Terminal, go to the cloned github repo and type:

php -S 127.0.0.1:8080

This starts the php server.

go to the preferred web browser.

type 127.0.0.1:8080/Login.html


You have complete access to the P2P lending system now.. 

EXPLORE AWAY......
