module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		banner: '/*! <%= pkg.name %> - v<%= pkg.version %> */\n',

		sass: {
			dist: {
				files: [{
					expand: true,
					cwd: 'wp-content/themes/schober-farms/src/scss',
					src: ['**/*.scss'],
					dest: 'wp-content/themes/schober-farms/src/css',
					ext: '.css'
				}]
			}
		},
		/*
		clean: {
		  css: ['wp-content/themes/schober-farms/src/css/*.css']
		},
		concat: {
	        options: {
	        	banner: '<%= banner %>',
	            stripBanners: true
	        },
	        app: {
	            src: [
					'wp-content/themes/schober-farms/src/css/*.css'
	            ],
	            dest: 'wp-content/themes/schober-farms/src/style.css'
	        }
	    },
	    */
		watch: {
			css: {
				files: 'wp-content/themes/schober-farms/src/scss/**/*.scss',
				tasks: ['sass']
			}
		}
	});


	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-clean');


	grunt.registerTask('default',['watch']);
	grunt.registerTask('build',['sass']);
}