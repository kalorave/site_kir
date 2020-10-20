let gulp = require('gulp');
let rename = require("gulp-rename");
let del = require('del');
let sass = require('gulp-sass');

gulp.task('clean', function() {
  return del(['../kir/css/main.scss']);
});

gulp.task('sass', function() {
  return gulp.src('../kir/css/main.scss')
    .pipe(sass({outputStyle: 'expanded'})) // 'compressed' for minify css
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('../kir/css'));
});

gulp.task('watch', function() {
  gulp.watch('../kir/**/*.scss', gulp.parallel('sass'));
});

gulp.task('default', gulp.parallel(
  'sass',
  'watch'
));
