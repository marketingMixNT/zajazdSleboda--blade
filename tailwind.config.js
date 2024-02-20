import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            screens:{
                xs:"390px",
                max:"2200px"
            },
            fontFamily: {
                heading: ["Playfair Display",'serif'],
                text: ["Hind", 'sans-serif'],
                handwriting:["Dancing Script", 'cursive']
            },
            colors:{
                primary:{
                    400:"#fff"
                },
                secondary:{
                    400:"#ccc"
                },
                fontLight:"#fff",
                fontDark:"#000",
                bgDark:{
    400:"#242424"
                },
                bgLight:{
                    200:'#fff',
                    400:"#f6f6f6",
                }
                
            }
        },
    },
    plugins: [forms],
};
