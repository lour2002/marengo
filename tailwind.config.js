module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  corePlugins: {
    preflight: false,
    boxShadow: false,
    //fontFamily: false,
  },
  darkMode: 'class',
  theme: {
    extend: {
      backdropBlur: {
        bg: '35px',
      },
      opacity: {
        '88':'.88',
      }
    },
    colors: {
      blue: '#182857',
      red: '#D02030',
      dark: '#121212',
      beige: '#F4ECE3',
      white: '#FFFFFF',
      black: '#000000'
    },
    fontFamily: {
      'sans': ['Montserrat', 'Arial', 'sans-serif']
    },
    fontWeight: {
      normal: 400,
      semibold: 600,
      bold: 700,
    },

  },
  plugins: [],
}
