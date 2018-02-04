var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('watch', function(){
  gulp.watch('library/scss/**/*.scss', ['sass']);
  // Other watchers
})

gulp.task('sass', function(){
  return gulp.src('library/scss/**/*.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(sass().on('error', sass.logError))
    .pipe( autoprefixer( 'last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4' ) )
    .pipe(gulp.dest('library/css'))
});
