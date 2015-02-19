module.exports = {
    options: {
        separator: ''
    },
    dist: {
        src: [
            'src/js/overall/header.js',
            'src/js/*.js',
            'src/js/overall/footer.js'
        ],
        dest: 'dest/js/main.js',
        nonull: true
    },
    plugins: {
        src: [
            'src/js/plugins/*.js'
        ],
        dest: 'dest/js/plugins.js',
        nonull: true
    }
};