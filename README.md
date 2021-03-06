# MyCI_Template

## What is this?

This is my personal kick-start (in Arabic) template that is built around the following:
* __Twitter Bootstrap:__	3.1.1
	1.	FontAwsome	4.1
	2.	x-editible
	3.	Datepicker
	4.	Bootstro
* __codeigniter:__
	1.	Ion_auth	2.5.2
	2.	CI_Template
	3.	Twitter CI library by Simon Emms
	4.	CI_Curl		By philsturgeon
	5.	CI_Cli		By philsturgeon
	6.	OAuth 2
	7.	ImageManipulation	By Tech @ Talk In code
* __jQuery:__
	1.	TimeAgo
	2.	Form (for ajax calls).
	3.	Jcrop




## What I have done in this template
*	codeigniter version 214 is added, to upgrade, just download the newest version of CI and paste it in the root folder under a name like `codeigniter212` then update the `index.php` to start using the new version.
*	All my modal functions are in a special file called `models/mo9.php`
*	Models, helpers...etc are loaded automatically.
*	(Load more) functionality instead of navigation, even though navigation still works, similar to old twitter.
*	Used CI Model best practices by @ShawnMcCool
*	Admin controllers and views are located in separate directories under `controllers/admin` and `views/admin` for easy navigation.
*	views have `template` folders where I have separated header, header_include, footer, footer_include, hidden_modals, navigation ..etc in separate files for ease of changes.
*	Email templates folder where it is used by mailing function in `mo9.php`.
*	Any website structure should be divided into `resource_types` such as `users,posts,pages,comments...etc`
*	Created a site-wide:
	1.	Commenting System.
	2.	Reporting System (to report abuse).
	3.	Voting system.
	*	You can attach any of the above to any element of your site, user pages, posts, pages ..etc with simple view include lines.
*	Nice and user friendly login and registration views (modal popup).
*	GoogleMaps custom controller to enable users to select their location instead of putting their address1 address2 city country crap, these fields should be loaded automatically upon map point selection.
*	Contact us page that submits visitors messages to both, you by email and the database to be viewed in Admin Panel.
*	Root.php controller with useful migration and other admin functions.
*	and more other features that I will be listing later.




## How to use?

### Prerequisites
*	You might want to use Xampp + Navicat (for mysql management) + hMailServer for mail functionality testing.
*	You need to know how to (CSS,HTML,PHP) and be familiar with both, twitter bootstrap and codeigniter documentations.
	
### Start using
Just copy or fork this repo and start adjusting it.
When you copy this template make sure you change the following:
*	Create your DB.
	*	Use the schema.sql file found under `sql/schema.sql` to start up with.
	*	You can delete the convert_remarks field of every table in the database, that one is automatically created while migrating from db to db.
*	Configure `application/config/databases.php` file.
*	Configure `application/config/twitter.php` file.
*	Configure `application/config/routes.php` file.
*	Configure `application/config/ion_auth.php` file.
	1.	Adjust site title `site_title`.
	2.	Adjust admin email `admin_email`.
*	Configure `application/config/config.php` file.
	1.	Adjust site URL `base_url`.
	2.	The Cookies domain `cookie_domain`.
* 	Change `.htaccess` site URL to point to the right directory.
* 	Update `humans.txt` file.
* 	To login as admin:
	*	Default Admin Email: `mohannad.otaibi@gmail.com`
	* 	Default Admin Password: reset it through `controllers.php` reset_admin function, the password will be `12345678` after the reset.

### When you're done with development
*	Don't forget to delete the tests/root.php controller.
*	Update all PHP and HTML comments to represent you.
*	Delete unnecessary files under `uploads/` folder.


## Author

**Mohannad Otaibi (Mo9a7)**
+ [http://twitter.com/BuFai7an](http://twitter.com/BuFai7an)
+ [http://github.com/Mo9a7i](http://github.com/Mo9a7i)
+ [http://MohannadOtaibi.com](http://MohannadOtaibi.com)
