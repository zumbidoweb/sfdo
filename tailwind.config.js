const colors = require('tailwindcss/colors') 

/** @type {import('tailwindcss').Config} */
 
module.exports = {
    presets: [          
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [
        './app/Filament/*.php',
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php', 
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', 'system-ui',],
                serif: ['Roboto Slab', 'Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
            },
            colors: { 
                danger: colors.red,
                primary: colors.green,
                success: colors.lime,
                warning: colors.yellow,
            }, 
            borderRadius: {
                none: '0px',
                sm: '0.125rem',
                DEFAULT: '0.2rem',
                md: '0.25rem',
                lg: '0.3rem',
                xl: '0.35rem',
                '2xl': '0.4rem',
                '3xl': '1.5rem',
                full: '9999px',
            },
            container: ({ theme }) => ({
                center: true,
                padding: {
                    DEFAULT: theme('spacing.8'),
                    sm: theme('spacing.6'),
                    md: theme('spacing.8'),
                    lg: theme('spacing.8'),
                    xl: theme('spacing.12'),
                },
            })
        },
    },
    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography'), 
    ],
}