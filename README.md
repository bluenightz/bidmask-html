# bidmask-html
html structure of bidmask project, use pug to create all php, html file

# How to edit and build project
use this command line `gulp watch` to watch pug or scss file when pug file has been edited gulp will generate .php file
.scss file is in `./assets/sass` 

## Option
change `production = false` in `./pug/inc/prebuild.pug` will build html file to `./dist`
change `production = true` in `./pug/inc/prebuild.pug` will build php file to `./dist`

