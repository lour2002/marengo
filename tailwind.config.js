const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  corePlugins: {
    boxShadow: false,
    container: false,
    //fontFamily: false,
  },
  theme: {
    extend: {
      backdropBlur: {
        bg: '35px',
      },
      opacity: {
        '88': '.88',
        '85': '.85'
      },
      spacing: {
        'x': '10px',
        '2x': '20px',
        '4x': '40px',
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
    fontSize: {
      sm: ['14px', '14px'],
      base: ['16px', '20px'],
      md: ['18px', '22px'],
      mb: ['20px', '24px'],
      lg: ['24px', '30px'],
    },
    fontWeight: {
      normal: 400,
      semibold: 600,
      bold: 700,
    },
    screens: {
      'xs': '320px',
      'sm': '414px',
      '2xl': '1440px',
      '3xl': '1800px',
      ...defaultTheme.screens,
    },
  },
  plugins: [],
}
