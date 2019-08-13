var gulp = require('gulp');
var sass = require('gulp-sass');
var pug = require('gulp-pug');
var rename = require('gulp-rename');
var data = require('gulp-data');
var path = require('path');
var fs = require('fs');
var del = require('del');
var plumber = require('gulp-plumber');
var checkCSS = require('gulp-check-unused-css');

var dataFile = 'pug/json/config.json';
 
gulp.task('sass', function () {
  return gulp.src('assets/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./dist/assets/css'));
});

gulp.task('cleancss', function () {
  return gulp
  			.src(['./dist/assets/css/global.css', '*.php'])
  			.pipe( checkCSS() );

});

gulp.task('pug', function(){
	return gulp.src('pug/**/*.pug')
	  .pipe( plumber() )
	  .pipe( data(function(file){
	  	return JSON.parse(fs.readFileSync(dataFile));
	  	// return require('pug/json/' + path.basename(file.path) + '.json');
	  }))
	  .pipe(pug({
	    // Your options in here. 
	    "basedir": "pug",
	    "pretty": true
	  }))
	  .pipe( rename( function( path ){
	  		path.extname = ".html"
	  }))
	  .pipe(gulp.dest("./dist/"));
});



gulp.task('watch', function(){
  gulp.watch('assets/sass/**/*.scss', ['sass']);
  gulp.watch(['pug/**/*.pug', 'pug/**/*.json'], ['pug']);
});

gulp.task('build', ['sass', 'pug']);
 