const colors = require('tailwindcss/colors');

module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
      colors: {
          white: colors.white,
          black: colors.black,
          gray: colors.trueGray,
          green: colors.green,
          red: colors.red,
          blue: colors.blue,
          orange: colors.orange,
      },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
