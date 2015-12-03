# Description

Develop fancy looking CakePHP applications with bootstrap shell templates.

-AdminLTE v.2, SBadmin v.2, FlatAdmin v.2

## Requirements

* [CakePHP](http://cakephp.org/) >= 2.3
* [Bootstrap](http://getbootstrap.com/) >= 3.0

## Installation

* Extract and copy the files to the proper directory.
* Update your App Controller (app/Controller/AppController.php) to use the templates


For AdminLTE v2 template:
```
class AppController extends Controller {
	public $theme = "AdminLTEv2";
	}
```

For SBAdmin v2 template:
```
class AppController extends Controller {
	public $theme = "SBadmin2";
	}
```

For FlatAdmin v2 template:
```
class AppController extends Controller {
	public $theme = "FlatAdmin2";
	}
```

* Start baking! If you are not familiar with Bake console commands, see CakePHP Cookbook for tutorials: http://book.cakephp.org/2.0/en/console-and-shells/code-generation-with-bake.html
* Select the desired template when prompted.




