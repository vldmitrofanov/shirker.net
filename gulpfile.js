'use strict'

var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var runSequence = require('run-sequence');
var replace = require('gulp-replace');
var injectPartials = require('gulp-inject-partials');
var inject = require('gulp-inject');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
//var copy = require('gulp-copy');
var merge = require('merge-stream');

gulp.paths = {
    dist: 'dist'
};

var paths = gulp.paths;


gulp.task('sass', function () {
    return gulp.src('./public/assets/sass/main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./public/assets/css'))
        .pipe(browserSync.stream());
});



gulp.task('watch', function(){
    gulp.watch('./public/assets/sass/**/*.scss',  gulp.series('sass'));
});