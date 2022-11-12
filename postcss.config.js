const colors = require('./colors')
const vars   = require('postcss-simple-vars')

module.exports = {
  plugins: {
    'postcss-simple-vars': {},
    'postcss-import': {},
      'tailwindcss/nesting': {},
      tailwindcss: __dirname + '/tailwind.config.js',
      autoprefixer: {},
  },
}