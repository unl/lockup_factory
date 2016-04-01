** Installation **
------------------

1. run `cd vagrant/dev; vagrant up`
2. `vagrant ssh` in the vagrant/dev folder to go into the VM (INSIDE the computer!)
3. Install Inkscape on the VM `sudo yum --disablerepo=repoforgeextras install inkscape` 
4. Install ImageMagick on the VM. `yum install -y ImageMagick ImageMagick-devel`
5. Create a config file for yourself. In the root, `cp config.sample.php config.inc.php` and edit as necessary.
6. Create a htaccess file for yourself. In the root, `cp public/sample.htaccess public/.htaccess` and edit as necessary.
7. You will need a database. Run the script `create_database.sql`, found in `/db`, on your SQL DB. 
8. This creates several users, including the approvers. You will likely want to create a user for yourself in the users table with role `admin`.
9. The server should now be running at `localhost:8009`.

** Usage **
-----------

The workflow is this:

1. User creates lockup on New Lockup Page. Lockup gets a preview svg and is shown to user.
2. Approvers/creative or an admin go in to check out the lockup. They approve it.
3. Once it has approval of both communicator contact (approver) and creative, user can generate the files.
4. Preview function is now obsolete, so it redirects to the download page.

** Upcoming Features **
-----------------------
* Edit lockups before and after approval.
* Regenerate files
* Select more than one style at a time.
