module.exports = {
 css: {
  files: '**/*.scss',
  tasks: ['compass']
 },
 scripts: {
  files: '***/*//*.js',
  tasks: ['concat']
 },
 minjs: {
  files: '***/*//*.js',
  tasks: ['uglify']
 }
};