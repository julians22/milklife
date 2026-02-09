module.exports = {
    // important: true,
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            boxShadow: {
                '1' : '10px 10px 5px 0px rgba(0,0,0,0.1)',
                '3' : '10px 10px 5px 0px rgba(0,0,0,0.3)',
            },
            colors: {
                milklife: {
                    blue: '#4dacdf',
                    'blue-banner': '#1f2e99',
                    'blue-banner-lighter': '#2639bf',
                    'blue-darken': '#256a8f',
                    yellow: '#e6e0d9',
                    orange: '#c58d3b',
                    "orange-darken": '#ff7500',
                }
            },
            fontFamily: {
                'gotham-light': ['Gotham Light', 'sans-serif'],
                'gotham-black': ['Gotham Black'],
                'gotham-bold': ['Gotham Bold'],
                'koara-light': ['Koara Light', 'sans-serif'],
                'koara-bold': ['Koara Bold'],
                'nunito': ['Nunito', 'sans-serif'],
                'lato' : ['Lato', 'sans-serif'],
                'geologica' : ['Geologica', 'sans-serif'],
            },
            screens: {
                'xs' : {'min' : '390px', 'max' : '424px'},
                '3xl': '1920px',
            },
            typography: (theme) => ({
                white: {
                    css: {
                        '--tw-prose-body': theme('colors.white'),
                        '--tw-prose-headings': theme('colors.white'),
                        '--tw-prose-lead': theme('colors.white'),
                        '--tw-prose-links': theme('colors.white'),
                        '--tw-prose-bold': theme('colors.white'),
                        '--tw-prose-counters': theme('colors.white'),
                        '--tw-prose-bullets': theme('colors.white'),
                        '--tw-prose-hr': theme('colors.white'),
                        '--tw-prose-quotes': theme('colors.white'),
                        '--tw-prose-quote-borders': theme('colors.white'),
                        '--tw-prose-captions': theme('colors.white'),
                        '--tw-prose-code': theme('colors.white'),
                        '--tw-prose-pre-code': theme('colors.white'),
                        '--tw-prose-pre-bg': theme('colors.white'),
                        '--tw-prose-th-borders': theme('colors.white'),
                        '--tw-prose-td-borders': theme('colors.white'),
                        '--tw-prose-invert-body': theme('colors.white'),
                        '--tw-prose-invert-headings': theme('colors.white'),
                        '--tw-prose-invert-lead': theme('colors.white'),
                        '--tw-prose-invert-links': theme('colors.white'),
                        '--tw-prose-invert-bold': theme('colors.white'),
                        '--tw-prose-invert-counters': theme('colors.white'),
                        '--tw-prose-invert-bullets': theme('colors.white'),
                        '--tw-prose-invert-hr': theme('colors.white'),
                        '--tw-prose-invert-quotes': theme('colors.white'),
                        '--tw-prose-invert-quote-borders': theme('colors.white'),
                        '--tw-prose-invert-captions': theme('colors.white'),
                        '--tw-prose-invert-code': theme('colors.white'),
                        '--tw-prose-invert-pre-code': theme('colors.white'),
                        '--tw-prose-invert-pre-bg': 'rgb(0 0 0 / 50%)',
                        '--tw-prose-invert-th-borders': theme('colors.white'),
                        '--tw-prose-invert-td-borders': theme('colors.white'),
                      },
                }
            }),
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
};
