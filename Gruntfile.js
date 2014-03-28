module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
			//concatenation
			concat: {
				options: {
					separator: ';',
				},
				dist: {
					src: ['src/js/*.js'],
					dest: 'dest/js/main.js',
					nonull: true,
				}
			},
			//compass
			compass: {
				dist: {
					options: {
						noLineComments: true,
						sassDir: 'src/scss',
						cssDir: 'dest/css'
					}
				}
			},
			//imagemin
			imagemin: {
				options: {
					cache: false
				},
				dist: {
					files: [
						{
							expand: true,
							cwd: 'src/images/',
							src: ['**/*.{png,jpg,gif}'],
							dest: 'dest/images/'
						}
					]
				}
			},
			//imagemin
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
			uncss: {
			  dist: {
				files: {
				  'dest/css/main.css': ['index.html']
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
				}

			//,images: {
			//   files: ['**/*'],
			//      tasks: ['imagemin'],
			//   options: {
			//     spawn: false
			//   }
			//}

			//,minjs: {
			//    files: 'dest/js/main.js',
			//    tasks: ['uglify']
			//}
		}
	}
);

    /* ======[ dependent plugins ]====== */
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-uncss');

    grunt.registerTask('default',['watch']);
    //grunt.registerTask('default', ['uglify']);
    //grunt.registerTask('default', ['imagemin']);
}