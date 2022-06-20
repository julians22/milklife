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
                    'blue-darken': '#256a8f',
                    yellow: '#e6e0d9',
                    orange: '#c58d3b'
                }
            },
            fontFamily: {
                'gotham-light': ['Gotham Light', 'sans-serif'],
                'gotham-black': ['Gotham Black'],
                'gotham-bold': ['Gotham Bold'],
                'koara-light': ['Koara Light', 'sans-serif'],
                'koara-bold': ['Koara Bold'],
            },
            screens: {
                '3xl': '1920px',
            },
        },
    },
    plugins: [],
};
