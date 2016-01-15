** Installation **
------------------

OMG this will be like, hard to install.
1. run `cd vagrant/dev; vagrant up`
2. You will need the Hoefler & FJ fonts, get them from Ryan Dee
3. Get them on your VM by putting them in the vagrant/dev folder
4. `vagrant ssh` in the vagrant/dev folder to go into the VM (INSIDE the computer!)
5. `sudo mv /vagrant/HFJ* /usr/share/fonts`
6. `sudo fc-cache /usr/share/fonts` Now the fonts are installed.
7. Install Inkscape on the VM `sudo yum --disablerepo=repoforgeextras install inkscape` 