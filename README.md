** Installation **
------------------

OMG this will be like, hard to install.
1. run `cd vagrant/dev; vagrant up`
2. `vagrant ssh` in the vagrant/dev folder to go into the VM (INSIDE the computer!)
3. Install Inkscape on the VM `sudo yum --disablerepo=repoforgeextras install inkscape` 
4. Get ImageMagick on the VM. Install pecl by `sudo yum install php-pear`
5. Then `pecl install imagick`