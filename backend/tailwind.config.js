module.exports = {
  purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',],
  darkMode: false, // or 'media' or 'class'
  theme: {
  	fontFamily: {
  		'robo': ['Roboto', 'sans-serif'],
  	},
  	textColor: {
       'primary': '#222222',
       'dark': '#4a4a4a',
     },
     extend: {},
  },
  variants: {
    
  },
  plugins: [],
}
