'use strict'

const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass');

gulp.task("concatScripts", () => {
  gulp.src(['jsfiles'])
  .pipe(concat("app.js"))
  .pipe(gulp.dest("js"))
});

gulp.task('sass', () => {
  return gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', () => {
  gulp.watch('./scss/**/*.scss', ['sass']);
});

gulp.task("default", ["concatScripts", "sass"], () => {
  console.log("This is the default test!");
});
