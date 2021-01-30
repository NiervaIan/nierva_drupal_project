
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./scss/{,*/}*.scss')
        .pipe(sass({outputStyle: 'compressed',includePaths: ['./node_modules/compass-mixins/lib'],}).on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});
gulp.task('watch', function(){
    gulp.watch('./scss/**/*.scss', gulp.series('sass'));
});
