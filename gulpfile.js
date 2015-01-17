/**
 * 참고 url
 * 라라캐스트 : https://laracasts.com/lessons/laravel-and-gulp
 * sitepoint : http://www.sitepoint.com/introduction-gulp-js/
 * uncss관련 addy osmani 글 : http://addyosmani.com/blog/removing-unused-css/
 */

var gulp = require('gulp');
var gutil = require('gulp-util');
var notify = require('gulp-notify');
var autoprefix = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var stripDebug = require('gulp-strip-debug');
var uglify = require('gulp-uglify');
var jshint = require('gulp-jshint');
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');
var minify = require('gulp-minify-css');
var less = require('gulp-less');
var path = require('path');


gulp.task('default', function() {
	console.log('default job');
});

gulp.task('less', function () {
	gulp.src('./assets/less/**/*.less')
		.pipe(less({
			paths: [path.join(__dirname, 'assets', 'less')]
		}))
		.pipe(gulp.dest('./assets/css'));

	//gulp.src('./assets/less/colorschemes/dark.less')
	//	.pipe(less())
	//	.pipe(gulp.dest('./assets/css/colorschemes'));
});
