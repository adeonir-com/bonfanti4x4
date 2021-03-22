const { src, dest, task, parallel, series, watch } = require('gulp');
const newer = require('gulp-newer');
const sass = require('gulp-sass');
const imagemin = require('gulp-imagemin');
const autoprefixer = require('gulp-autoprefixer');
const minifycss = require('gulp-uglifycss');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const browsersync = require('browser-sync');
const stripdebug = require('gulp-strip-debug');

sass.compiler = require('sass');

const dir = {
  src: 'src',
  build: 'wp-content/themes/simple',
};

const images = {
  src: `${dir.src}/images/**/*`,
  build: `${dir.build}/img/`,
};

const styles = {
  src: `${dir.src}/styles/**/*`,
  watch: `${dir.src}/styles/**/*`,
  build: `${dir.build}/css/`,
  options: {
    outputStyle: 'compressed',
    imagePath: images.build,
    precision: 3,
    errLogToConsole: true,
  },
};

const scripts = {
  src: `${dir.src}/scripts/**/*`,
  build: `${dir.build}/js/`,
};
task('images', () =>
  src(images.src)
    .pipe(newer(images.src))
    .pipe(imagemin())
    .pipe(dest(images.build))
    .pipe(browsersync.stream())
);

task('styles', () =>
  src(styles.src)
    .pipe(newer(styles.build))
    .pipe(sass(styles.options))
    .pipe(autoprefixer())
    .pipe(minifycss())
    .pipe(dest(styles.build))
    .pipe(browsersync.stream())
);

task('scripts', () =>
  src(scripts.src)
    .pipe(stripdebug())
    .pipe(
      babel({
        presets: ['@babel/env'],
      })
    )
    .pipe(uglify())
    .pipe(dest(scripts.build))
    .pipe(browsersync.stream())
);

task('browser-sync', (done) => {
  browsersync.init({
    proxy: 'localhost:8001',
    ghostMode: false,
    open: false,
  });

  done();
});

task('watchy', () => {
  watch(images.src, series('images'));
  watch(styles.src, series('styles'));
  watch(scripts.src, series('scripts'));
});

task('dev', parallel('images', 'styles', 'scripts'));

task('default', series('dev', parallel('browser-sync', 'watchy')));

task('build', series('images', 'styles', 'scripts'));
