module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            options: {
                separator: '',
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
        }

        //,images: {
		//      files: ['**/*'],
		//        tasks: ['imagemin'],
		//          options: {
		//                spawn: false
		//    }
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

    grunt.registerTask('default',['watch']);
    //grunt.registerTask('default', ['imagemin']);
    //grunt.registerTask('default', ['uglify']);
    //grunt.registerTask('default', ['concat', 'uglify']);
}
