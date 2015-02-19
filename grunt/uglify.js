module.exports = {
 options: {
  mangle: false
 },
 my_target: {
  files: {
   'dest/js/main.min.js'   : 'dest/js/main.js',
   'dest/js/plugins.min.js': 'dest/js/plugins.js'
  }
 }
};