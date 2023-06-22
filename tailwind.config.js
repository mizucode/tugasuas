/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            fontFamily: {
                poppins: ["Poppins"],
            },
            colors: {
                dsr: "#1455cd",
                ylw: "#f4bc2b",
                ylw2: "#FFB800",
                niger: "#212529",
                biru: "#1390ff",
                kuning: "#ffd93d",
                abu: "#454545",
                dark: "#232323",
                putih: "#f7f7f7",
                text: "#393C43",
                primary: "#292929",
                secondaryDark: "#474747",
                secondaryBlue: "#657df7",
                secondaryYellow: "#ffe810",
                secondaryGray: "#eaeaea",
                backgroundColor: "#f5f6fb",
                backgroundFooter: "#06165b",
                text: "#ffffff",
                BgNote: "#F5F6FB",
                BgNoteHover: "#BAE6FD",
            },
            screens: {
                "2xl": "1320px",
            },
        },

        plugins: [],
    },
};
