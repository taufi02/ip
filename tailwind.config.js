module.exports = {
  purge: {
    enabled: false,
    content: ['./resources/**/*.blade.php',],
      options: {
        safelist: [
          /data-theme$/,
        ]
      },
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      minWidth : {
        '700' : '700px'
      },
      minHeight : {
        '500' : '500px'
      },
      display: ['hover', 'focus'],
    },
  },
  variants: {
    extend: {},
  },

  plugins: [
    require('daisyui'),
  ],
}
