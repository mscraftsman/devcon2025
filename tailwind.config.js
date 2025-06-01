export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      backgroundSize: {
        '600': '600% 600%',
      },
      keyframes: {
        gradientShift: {
          '0%, 100%': { 'background-position': '0% 50%' },
          '50%': { 'background-position': '100% 50%' },
        },
      },
      animation: {
        gradientShift: 'gradientShift 15s ease infinite',
      },
      colors: {
        purpleCustom: '#7F00FF',
        cyanCustom: '#00C6FF',
      },
    },
  },
  plugins: [],
};