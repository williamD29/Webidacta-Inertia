const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [],
    theme: {
        screens: {
            xs: "320px",
            // => @media (min-width: 320px) { ... }

            sm: "640px",
            // => @media (min-width: 640px) { ... }

            md: "768px",
            // => @media (min-width: 768px) { ... }

            lg: "1024px",
            // => @media (min-width: 1024px) { ... }

            xl: "1280px"
            // => @media (min-width: 1280px) { ... }
        },
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans]
            }
        }
    },
    variants: {},
    plugins: [require("@tailwindcss/ui")]
};
