var gulp = require('gulp'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  cleanCSS = require('gulp-clean-css'),
  themeLocation = './';

gulp.task('minify-js', function(done) {
  gulp
    .src([
      themeLocation + 'js/wow.min.js',
      themeLocation + 'js/jquery-3.3.1.min.js',
      themeLocation + 'js/all.min.js',
      themeLocation + 'js/funciones.js',
      themeLocation + 'js/popper.min.js',
      themeLocation + 'js/bootstrap.min.js'
    ])
    .pipe(concat('main-bundle.js'))
    .pipe(gulp.dest(themeLocation + 'js/'));
  done();
});
gulp.task('minify-css', function(done) {
  gulp
    .src([
      themeLocation + 'css/bootstrap.min.css',
      themeLocation + 'css/estilos.css',
      themeLocation + 'css/estilosUno.css',
      themeLocation + 'css/animate.min.css'
    ])
    .pipe(concat('main-bundle.css'))
    // .pipe(cleanCSS())
    .pipe(gulp.dest(themeLocation + 'css/'));
  done();
});
gulp.task(
  'optimiza',
  gulp.series('minify-js', 'minify-css', function(done) {
    console.log('Eres tu alicate!!!');
    done();
  })
);
