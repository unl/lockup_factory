** Installation **
------------------

OMG this will be like, hard to install.
1. run `cd vagrant/dev; vagrant up`
2. You will need the Hoefler & Co. fonts, get them from Ryan Dee
3. You will need to remove certain fonts from the Mercury Text G2 set. Inkscape does not realize that there are several different italics and doesn't work correctly. Leave only MercuryTextG2-Bold.otf MercuryTextG2-Italic.otf MercuryTextG2-Roman.otf
4. Get them on your VM by putting them in the vagrant/dev folder
5. `vagrant ssh` in the vagrant/dev folder to go into the VM (INSIDE the computer!)
6. `sudo mv /vagrant/HFJ* /usr/share/fonts`
7. `sudo fc-cache /usr/share/fonts` Now the fonts are installed.
8. Install Inkscape on the VM `sudo yum --disablerepo=repoforgeextras install inkscape` 