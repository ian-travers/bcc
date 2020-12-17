const colors = require('tailwindcss/colors');

module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
      colors: {
          gray: colors.trueGray,
          green: colors.green,
          red: colors.red,
          orange: colors.orange,
      },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
