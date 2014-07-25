# Jumpstart Starter Theme

[![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/)

Jumpstart is a WordPress starter theme based on [Roots](https://github.com/roots/roots/) and several other starter themes.

## Full stack installation and configuration

1. Create a new [Bedrock](https://github.com/roots/bedrock) project and follow the installation instructions.
2. Remove unwanted Bedrock features.
3. Add plugins to composer.json
4. Install this theme and follow instructions below.
5. Initialize new git project.

### Additional features

Install the [Soil](https://github.com/roots/soil) plugin to enable additional features:

* Root relative URLs
* Nice search (`/search/query/`)
* Cleaner output of `wp_head` and enqueued assets markup
* Image captions use `<figure>` and `<figcaption>`

## Theme installation

Download the theme and then rename the directory to the name of your theme or website.

If you don't use [Bedrock](https://github.com/roots/bedrock), you'll need to add the following to your `wp-config.php` on your development installation:

```php
define('WP_ENV', 'development');
```

## Theme configuration

Edit `lib/config.php` to enable or disable theme features and to define a Google Analytics ID.

Edit `lib/init.php` to setup navigation menus, post thumbnail sizes, post formats, and sidebars.

### Install Grunt

**Unfamiliar with npm? Don't have node installed?** [Download and install node.js](http://nodejs.org/download/) before proceeding.

From the command line:

1. Install `grunt-cli` globally with `npm install -g grunt-cli`.
2. Navigate to the theme directory, then run `npm install`. npm will look at `package.json` and automatically install the necessary dependencies. It will also automatically run `bower install`, which installs front-end packages defined in `bower.json`.

When completed, you'll be able to run the various Grunt commands provided from the command line.

### Available Grunt commands

* `grunt dev` — Compile LESS to CSS, concatenate and validate JS
* `grunt watch` — Compile assets when file changes are made
* `grunt build` — Create minified assets that are used on non-development environments

## Additional resources for common tasks

* [wp-bootstrap-navwalker](https://github.com/twittem/wp-bootstrap-navwalker)
* [register-post-type](https://gist.github.com/justintadlock/6552000)