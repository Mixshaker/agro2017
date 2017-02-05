"use strict";

let gulp = require('gulp'),
  sass = require('gulp-sass'),
  refresh = require('gulp-refresh'),
  cleanCSS = require('gulp-clean-css'),
  autoprefixer = require('gulp-autoprefixer'),
  uncss = require('gulp-uncss'),
  concat = require('gulp-concat'),
  rename = require('gulp-rename');


gulp.task('css', () => {
  return gulp.src('style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(autoprefixer({
      browsers: ['last 10 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('dist/css'))
    .pipe(refresh())
});

gulp.task('html', () => {
  return gulp.src('dist/*.html')
    .pipe(gulp.dest('dist/'))
    .pipe(refresh())
});

gulp.task('php', () => {
  return gulp.src('dist/*.php')
    .pipe(gulp.dest('dist/'))
    .pipe(refresh())
});

gulp.task('watch', () => {
  refresh.listen()
  gulp.watch('dist/*.html', ['html']);
  gulp.watch('dist/*.php', ['php']);
  gulp.watch('*.scss', ['css']);
});

gulp.task('default', ['html', 'php', 'css', 'watch']);