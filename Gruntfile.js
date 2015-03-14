module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      dist: {
        src: ['less/info.css', 'style.css'],
        dest: 'style.css'
      }
    },
    less: {
      dist: {
        options: { yuicompress: true  },
        files: {
          "style.css": "less/style.less",
          "eine-frage-des-charakters.css": "less/eine-frage-des-charakters.less"
        }
      }
    },
    watch: {
      options: {
        livereload: 1337
      },
      dist: {
        files: 'less/**',
        tasks: ['less', 'concat']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['watch']);
};