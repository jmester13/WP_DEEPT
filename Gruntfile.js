'use strict';
module.exports = function(grunt) {
 
    // load all grunt tasks
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
 
    grunt.initConfig({
 
        // watch for changes and trigger compass, jshint, uglify and livereload
        watch: {
            options: {
                livereload: true,
            },
            
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint', 'uglify']
            },
            styles: {
                files: ['less/**/*.less'], // which files to watch
                tasks: ['less'],
                options: {
                  nospawn: true
                }
              }
           
        },

        less: {
          development: {
            options: {
              compress: true,
              yuicompress: true,
              optimization: 2
            },
            files: {
              "style.css": "less/style.less" // destination file and source file
            }
          }
        },
 
       
 
        // javascript linting with jshint
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                "force": true
            },
            all: [
                'Gruntfile.js',
                'js/**/*.js'
            ]
        },
 
 
        // image optimization
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true
                },
                files: [{
                    expand: true,
                    cwd: 'assets/images/',
                    src: '**/*',
                    dest: 'assets/images/'
                }]
            }
        },
 
        // // deploy via rsync
        // deploy: {
        //     staging: {
        //         src: "./",
        //         dest: "~/path/to/theme",
        //         host: "user@host.com",
        //         recursive: true,
        //         syncDest: true,
        //         exclude: ['.git*', 'node_modules', '.sass-cache', 'Gruntfile.js', 'package.json', '.DS_Store', 'README.md', 'config.rb', '.jshintrc']
        //     },
        //     production: {
        //         src: "./",
        //         dest: "~/path/to/theme",
        //         host: "user@host.com",
        //         recursive: true,
        //         syncDest: true,
        //         exclude: '<%= rsync.staging.exclude %>'
        //     }
        // }
 
    });
 
    // rename tasks
    // grunt.renameTask('rsync', 'deploy');
 
    // register task
    grunt.registerTask('default', ['less', 'watch']);
 
};