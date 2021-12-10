module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  corePlugins: {
    preflight: false,
    boxShadow: false,
    fontFamily: false,
  },
  darkMode: 'class',
  theme: {
    extend: {
      backdropBlur: {
        bg: '35px',
      }
    },
    colors: {
      blue: '#182857',
      red: '#D02030',
      dark: '#121212',
      beige: '#F4ECE3',
    },
    fontWeight: {
      normal: 400,
      semibold: 600,
      bold: 700,
    }
  },
  plugins: [],
}
