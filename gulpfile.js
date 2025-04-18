const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const cleanCSS = require("gulp-clean-css");
const autoprefixer = require("gulp-autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");
const browserSync = require("browser-sync").create();

// Putanje
const paths = {
  scss: {
    src: "scss/**/*.scss",
    dest: "dist/css",
  },
  js: {
    src: "js/**/*.js",
    dest: "dist/js",
  },
};

// SCSS task
function styles() {
  return gulp
    .src("scss/main.scss")
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(autoprefixer({ cascade: false }))
    .pipe(cleanCSS({ level: 2 }))
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest(paths.scss.dest))
    .pipe(browserSync.stream());
}

// JS task
function scripts() {
  return gulp
    .src(paths.js.src)
    .pipe(sourcemaps.init())
    .pipe(concat("main.min.js"))
    .pipe(uglify())
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest(paths.js.dest))
    .pipe(browserSync.stream());
}

// Watch task
function watch() {
  browserSync.init({
    proxy: "http://localhost/ime-tvoje-wp-stranice", // zamijeni sa stvarnim lokalnim domenom
    notify: false,
  });

  gulp.watch(paths.scss.src, styles);
  gulp.watch(paths.js.src, scripts);
  gulp.watch("**/*.php").on("change", browserSync.reload);
}

// Default task
exports.default = gulp.series(styles, scripts, watch);
