module.exports = {
  mode: "jit",
  content: ["./**/*.php", "./src/**/*.js"],
  darkMode: "class",
  theme: {
    zIndex: {
      1: 1,
      2: 2,
      10: 10,
    },
    listStyleType: {
      auto: "auto",
      none: "none",
      disc: "disc",
      decimal: "decimal",
      square: "square",
    },
    container: {
      center: true,
      padding: "15px",
    },
    extend: {
      lineHeight: {
        12: "3rem",
        16: "4rem",
      },
      colors: {
        "theme-dark": "#1c2126",
        "theme-gray": "#17171a",
        primary: "#6266f0",
      },
      fontSize: {
        // '20xl': '20rem'
      },
      fontFamily: {
        heading: "Playfair Display",
      },
    },
  },
  // safelist: ["bg-yellow-300", "bg-green-300"],
  variants: {
    extend: {},
  },
  // plugins: [require('@tailwindcss/typography')],
};
