module.exports = function (grunt) {
	var lessDir = 'less';
	var cssDir = 'public/css';

	var cssFiles = [
		'main'
	];

	var lessFiles = {};
	cssFiles.forEach(function(file) {
		lessFiles[cssDir + '/' + file + '.css'] = lessDir + '/' + file + '.less';
	});

	var autoprefixPlugin = new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]});
	var cleanCssPlugin = new (require('less-plugin-clean-css'))();

	require('load-grunt-tasks')(grunt);

	grunt.initConfig({
		less: {
			all: {
				options: {
					paths: [lessDir],
					plugins: [
						autoprefixPlugin,
						cleanCssPlugin
					]
				},
				files: lessFiles
			}
		},
		watch: {
			less: {
				files: lessDir + '/**/*.less',
				tasks: ['less']
			}
		}
	});

	grunt.loadNpmTasks('less');

	// establish grunt default
	var defaultTasks = ['less'];
	grunt.registerTask('default', defaultTasks);
};	