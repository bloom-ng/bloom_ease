import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        plugin(function({ addUtilities }) {
          const newUtilities = {
            '.backdrop-blur-sm': {
              backdropFilter: 'blur(4px)',
            },
            '.backdrop-blur': {
              backdropFilter: 'blur(8px)',
            },
            '.backdrop-blur-lg': {
              backdropFilter: 'blur(12px)',
            },
            // Add more sizes as needed
          };
          addUtilities(newUtilities, ['responsive', 'hover']);
        }),
      ],
};
