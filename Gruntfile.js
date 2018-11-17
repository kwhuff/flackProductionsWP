// eslint-disable-next-line no-undef
module.exports = function(grunt) {
    'use strict';

    // Project configuration.
    grunt.initConfig({
        themeName: 'ignition',
        path: {
            template: 'html/wp-content/themes/<%= themeName %>',
            appJS: '<%= path.template %>/javascripts/app.js',
            appCSS: '<%= path.template %>/css/app.css',
        },

        browserify: {
            options: {
                debug: true,
                extensions: ['es6'],
                transform: [['babelify', {'presets': ['env', 'stage-1']}]],
            },
            app: {
                src: 'src/js/app.js',
                dest: '<%= path.appJS %>',
            },
        },

        sass: {
            options: {
                sourceMap: true, includePaths: ['node_modules/foundation-sites/scss'],
            }, dist: {
                files: {
                    '<%= path.template %>/css/app.css': 'src/scss/app.scss',
                },
            },
        },

        autoprefixer: {
            options: {
                // Task-specific options go here.
                browsers: ['last 2 versions', 'ie >= 9', 'android >= 4.4', 'ios >= 7'],
            }, your_target: {
                // Target-specific file lists and/or options go here.
                src: ['<%= path.appCSS %>'],
                dest: '<%= path.appCSS %>',
            },
        },

        watch: {
            files: [
                'src/scss/*.scss',
                'src/scss/**/*.scss',
                'src/*.js',
                'src/**/*.js',
                'src/**/*.html',
                'test/**/*.js',
                '<%= path.template %>/*.php',
                '<%= path.template %>/inc/*.php',
            ],
            tasks: 'default',
            options: {
                spawn: false, livereload: true,
            },
        },

        eslint: {
            options: {
                configFile: '.eslintrc.json',
                failOnError: false
            },
            target: ['src/js/app.js']
        }
    });

    grunt.loadNpmTasks('grunt-eslint');

    grunt.loadNpmTasks('grunt-sass');

    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.loadNpmTasks('grunt-autoprefixer');

    grunt.loadNpmTasks('grunt-browserify');

    // Default task.
    grunt.registerTask('default', ['eslint', 'browserify', 'sass', 'autoprefixer', 'watch']);

    grunt.registerTask('staging', ['browserify', 'sass', 'autoprefixer']);

    grunt.registerTask('production', ['browserify', 'sass', 'autoprefixer']);
};
