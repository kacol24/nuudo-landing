module.exports = {
  content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ], {dot: true}),
  theme: {
    fontFamily: {
      'gotham-rounded': 'Gotham Rounded, sans-serif',
      'gotham-book': 'Gotham Rounded Book, sans-serif'
    },
    extend: {
      colors: {
        primary: '#ff8900',
        primaryAlt: '#a5d0f2'
      },
      textColor: {
        body: '#707579'
      }
    }
  },
  plugins: []
};
