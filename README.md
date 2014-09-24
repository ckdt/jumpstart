# Jumpstart Starter Theme

[![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/)

Jumpstart is a WordPress starter theme based on [Roots](https://github.com/roots/roots/) and several other starter themes. It basically is a stripped down version of [Roots](https://github.com/roots/roots/) ;)

## Requirements
1. [Apache](http://httpd.apache.org/) or [Nginx](http://nginx.net/)
2. [PHP](http://www.php.net/) version 5.2.4 or greater
3. [MySQL](http://www.mysql.com/) version 5.0 or greater

## Full stack installation and configuration
1. Install [Composer](https://getcomposer.org/) globally: `curl -sS https://getcomposer.org/installer | php`
2. Create [Bedrock](https://github.com/roots/bedrock) project:  `composer create-project roots/bedrock <path>`
3. Create new local [MySQL](http://www.mysql.com/) database by using [MAMP](http://www.mamp.info/en/) and [phpMyAdmin](http://www.phpmyadmin.net/home_page/index.php)
4. Configure [Bedrock](https://github.com/roots/bedrock). Edit `.env` file follow these [instructions](https://github.com/roots/bedrock#installationusage)
5. Add [Wordpress Plugins](http://plugins.svn.wordpress.org/) to `composer.json` file by adding [wpackagist](http://wpackagist.org/) references to the `"require":` section.
6. Run `composer update` to download the [Wordpress Plugins](http://plugins.svn.wordpress.org/)
7. Download & Install [this theme](https://github.com/ckdt/jumpstart) to the `web/app/themes` directory
8. Install [NodeJS](http://nodejs.org/download/) globally
9. Install [Bower](http://bower.io/) & [Grunt](http://gruntjs.com/) globally `npm install -g grunt-cli bower`
10. Go to your theme directory `cd web/app/themes/jumpstart` and run `npm install`
11. Use available grunt commands (see below)
12. Initialize new git project.

## Theme installation and configuration

Download the theme and then rename the directory to the name of your theme or website.

Please read the [Roots](https://github.com/roots/roots/#theme-development) documentation on how to configure the theme and install dependencies.

## Available Grunt commands

* `grunt dev` — Compile LESS to CSS, concatenate and validate JS
* `grunt watch` — Compile assets when file changes are made
* `grunt build` — Create minified assets that are used on non-development environments

## Installing frontend packages

1. `bower install --save [package name]`.
2. Add the path of the unminified js file to `jsFileList` in `Gruntfile.js`.

## Additional resources for common tasks

* [wp-bootstrap-navwalker](https://github.com/twittem/wp-bootstrap-navwalker)
* [register-post-type](https://gist.github.com/justintadlock/6552000)

## TODO

* Use [Timber](https://github.com/jarednova/timber) for templates
