
var gulp       = require('gulp');
var gutil      = require('gulp-util');
var sass       = require('gulp-sass');
var autoprefix = require('gulp-autoprefixer');
var minifyCSS  = require('gulp-minify-css');
var exec       = require('child_process').exec;
var sys        = require('sys');

// Where do you store your Sass files?
var sassDir = 'assets/scss';

// Which directory should Sass compile to?
var targetCSSDir = 'dist/assets/css';

gulp.task('css', function () {
    return gulp.src(sassDir + '/styles.scss')
        .pipe(sass({ style: 'compressed' }).on('error', gutil.log))
        .pipe(autoprefix('last 10 version'))
        .pipe(gulp.dest(targetCSSDir))
});

// Generate site
gulp.task('gen', function() {
    exec('php bin/generate.php', function(error, stdout) {
        sys.puts(stdout);
    });
});

// Keep an eye on Sass and PHP files for changes...
gulp.task('watch', function () {
    gulp.watch(sassDir + '/**/*.scss', ['css']);
    gulp.watch('views/**/*.blade.php', ['gen']);
});