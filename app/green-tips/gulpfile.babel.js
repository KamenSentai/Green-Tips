// Imports plugins

import gulp            from 'gulp'
import gulpLoadPlugins from 'gulp-load-plugins'
import browserSync     from 'browser-sync'
import babelify        from 'babelify'
import browserify      from 'browserify'
import source          from 'vinyl-source-stream'
import buffer          from 'vinyl-buffer'
import watchify        from 'watchify'

// Launch plugins loader

const $ = gulpLoadPlugins()

// Create session

browserSync.create()

// Build paths

const server  = 'htdocs'
const folders = process.cwd().split('/')
const project = folders[folders.length - 3]
const theme   = `${folders[folders.length - 1]}/`

let root  = '/'
let local = ''

const buildRoot = () => {
  for (const folder of folders) {
    if (folder.length != 0) {
      root += `${folder}/`
      if (folder == project) break
    }
  }
}

const buildLocal = () => {
  let index = 0
  for (const folder of folders) {
    if (folder == server) {
      index = folders.indexOf(server)
      for (let i = index + 1 ; i < folders.length ; i++) {
        if (folders[i] != project) local += `${folders[i]}/`
        else break
      }
      break
    }
  }
}

buildRoot()
buildLocal()

const config = {
  src: 'sources/',
  thm: `${root}public/wp-content/themes/${theme}`
}

const message = {
  compiled   : '<%= file.relative %>: file compiled',
  exported   : '<%= file.relative %>: file exported',
  transpiled : '<%= file.relative %>: file transpiled',
  minified   : '<%= file.relative %>: file minified',
  cleaned    : '<%= file.relative %>: file cleaned',
  error      : '<%= error.message %>'
}

/**
 * 
 * Development
 * 
 */

// Server

gulp.task('server', ['root', 'data', 'assets', 'styles', 'scripts', 'templates'], () => {
  browserSync.init({
    proxy   : `http://localhost/${local}${project}/public/`,
    browser : 'Google Chrome'
  })
  gulp.watch([
    '!./gulpfile.babel.js',
    '!./*.+(html|php)',
    './*.*'
  ], ['root'])
  gulp.watch([
    '*.json',
    '**/*.json'
  ],['data'])
  gulp.watch(`${config.src}assets/**/*.*`, ['assets'])
  gulp.watch([
    `${config.src}scss/**/*.scss`,
    `${config.src}scss/*.scss`
  ], ['styles'])
  gulp.watch([
    '*.+(html|php)',
    '**/*.+(html|php)',
    '**/**/*.+(html|php)',
    '**/**/**/*.+(html|php)'
  ],['templates'])
})

// Root

gulp.task('root', () => {
  return gulp.src([
    '!./gulpfile.babel.js',
    '!./*.+(html|php)',
    './*.*'
  ])
    .pipe($.plumber())
    .on('error', $.notify.onError({
      title   : 'Root',
      message : message.error,
      sound   : 'beep'
    }))
    .pipe(gulp.dest(`${config.thm}`))
    .pipe(browserSync.stream())
    .pipe($.notify({
      title   : 'Root',
      message : message.exported,
      sound   : 'beep'
    }))
})

// Data

gulp.task('data', () => {
  return gulp.src([
    '**/*.json',
    '*.json',
  ])
    .pipe($.plumber())
    .on('error', $.notify.onError({
      title   : 'Data',
      message : message.error,
      sound   : 'beep'
    }))
    .pipe(gulp.dest(`${config.thm}`))
    .pipe(browserSync.stream())
    .pipe($.notify({
      title   : 'Data',
      message : message.exported,
      sound   : 'beep'
    }))
})

// Assets

gulp.task('assets', () => {
  return gulp.src(`${config.src}assets/**/*.*`)
    .pipe($.plumber())
    .on('error', $.notify.onError({
      title   : 'Assets',
      message : message.error,
      sound   : 'beep'
    }))
    .pipe(gulp.dest(`${config.thm}assets/`))
    .pipe(browserSync.stream())
    .pipe($.notify({
      title   : 'Assets',
      message : message.exported,
      sound   : 'beep'
    }))
})

// Styles

gulp.task('styles', () => {
  return gulp.src(`${config.src}scss/app.scss`)
    .pipe($.plumber())
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.sass())
    .on('error', $.notify.onError({
      title   : 'Styles',
      message : message.error,
      sound   : 'beep'
    }))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest(`${config.thm}styles/`))
    .pipe(browserSync.stream())
    .pipe($.notify({
      title   : 'Styles',
      message : message.compiled,
      sound   : 'beep'
    }))
})

// Scripts

let bundler = null

const bundle = () => {
  bundler.bundle()
    .pipe($.plumber())
    .on('error', $.notify.onError({
      title   : 'Scripts',
      message : message.error,
      sound   : 'beep'
    }))
    .pipe(source('app.js'))
    .pipe(buffer())
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest(`${config.thm}scripts/`))
    .pipe(browserSync.stream())
    .pipe($.notify({
      title   : 'Scripts',
      message : message.transpiled,
      sound   : 'beep'
    }))
}

gulp.task('scripts', () => {
  bundler = browserify({
    entries : `${config.src}js/app.js`,
    debug   : true,
    paths   : ['./node_modules', `${config.src}js/`]
  }).transform(babelify)
  bundler.plugin(watchify)
  bundler.on('update', bundle)
  bundle()
})

// Templates

gulp.task('templates', () => {
  return gulp.src([
    './**/**/**/*.+(html|php)',
    './**/**/*.+(html|php)',
    './**/*.+(html|php)',
    './*.+(html|php)'
  ])
    .pipe($.plumber())
    .on('error', $.notify.onError({
      title   : 'Templates',
      message : message.error,
      sound   : 'beep'
    }))
    .pipe(gulp.dest(`${config.thm}`))
    .pipe(browserSync.stream())
    .pipe($.notify({
      title   : 'Templates',
      message : message.exported,
      sound   : 'beep'
    }))
})

/**
 * 
 * Production
 * 
 */

// CSS

gulp.task('minCss', () => {
  return gulp.src(`${config.thm}styles/app.css`)
    .pipe($.cssnano())
    .on('error', $.notify.onError({
      title   : 'Styles',
      message : message.error,
      sound   : 'beep'
    }))
    .pipe(gulp.dest(`${config.thm}styles/`))
    .pipe($.notify({
      title   : 'Styles',
      message : message.minified,
      sound   : 'beep'
    }))
})

// JS

gulp.task('minJs', () => {
  return gulp.src(`${config.thm}scripts/app.js`)
    .pipe($.uglify())
    .on('error', $.notify.onError({
      title   : 'Scripts',
      message : message.error,
      sound   : 'beep'
    }))
    .pipe(gulp.dest(`${config.thm}scripts/`))
    .pipe($.notify({
      title   : 'Scripts',
      message : message.minified,
      sound   : 'beep'
    }))
})

// Images

gulp.task('minImages', () => {
  return gulp.src(`${config.thm}assets/images/*.+(png|jpg|jpeg|gif|svg)`)
    .pipe($.imagemin())
    .on('error', $.notify.onError({
      title   : 'Images',
      message : message.error,
      sound   : 'beep'
    }))
    .pipe(gulp.dest(`${config.thm}assets/images/`))
    .pipe($.notify({
      title   : 'Images',
      message : message.minified,
      sound   : 'beep'
    }))
})

// Maps

gulp.task('cleanMaps', () => {
  return gulp.src([
    `${config.thm}scripts/app.js.map`,
    `${config.thm}styles/app.css.map`
  ])
    .pipe($.clean({
      force: true,
      read: false
    }))
    .on('error', $.notify.onError({
      title   : 'Maps',
      message : message.error,
      sound   : 'beep'
    }))
    .pipe($.notify({
      title   : 'Maps',
      message : message.cleaned,
      sound   : 'beep'
    }))
})

/**
 * 
 * Run
 * 
 */

gulp.task('default', ['server'])
gulp.task('prod', ['minCss', 'minJs', 'minImages', 'cleanMaps'])