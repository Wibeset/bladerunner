Bladerunner
===========

Github Pages static site generator in PHP using Blade and gulp.js.

## Installation

* Install requires `composer install`
* Install gulp.js globally if not done yet `sudo npm install -g gulp`
* Install gulp.js locally `npm install --save-dev gulp`
* Install gulp.js packages locally `npm install`

## Generate static website

* To refresh view, run `php bin/generate.php` or `gulp gen`
* To refresh css, run `gulp css`

If you don't wanna run bot commands every times you change something, use `gulp watch`.

## Deploy

* Run `bin/gh-deploy.sh`

n.b: To use a custom domain name or subdomain, add a CNAME file into `dist` subdirectory like every github pages project.

## Credits

* [PhiloNL/Laravel-Blade](https://github.com/PhiloNL/Laravel-Blade)
* [gulp.js](https://github.com/gulpjs)

## License

The MIT License (MIT). Please see [LICENSE](https://github.com/Wibeset/bladerunner/blob/master/LICENSE) for more information.