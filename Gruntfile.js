module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
					options: {
					    separator: '  ',
					},
					dist: {
					    src: [
					    'src/js/overall/header.js',
					    'src/js/*.js',
					    'src/js/overall/footer.js'
					    ],
					    dest: 'dest/js/main.js',
					    nonull: true,
					}
        },
        compass: {
						dist: {
					    options: {
					        noLineComments: true,
					        sassDir: 'src/scss',
					        cssDir: 'dest/css'
					    }
						}
        },
        uglify: {
            options: {
                mangle: false
            },
            my_target: {
                files: {
                    'dest/js/main.min.js': ['dest/js/main.js']
                }
            }
        },

        /* ======[ configuration ]====== */
        watch: {
					css: {
						files: '**/*.scss',
						tasks: ['compass']
					},
					scripts: {
						files: '***/*//*.js',
						tasks: ['concat']
					},
					minjs: {
						files: 'dest/js/main.js',
						tasks: ['uglify']
					}
    	}
}
);

    /* ======[ dependent plugins ]====== */
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');

    grunt.registerTask('default',['watch']);
}
