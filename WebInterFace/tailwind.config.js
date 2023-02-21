/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      keyframes: {
        wiggle: {
          wiggle: {
            "0%": { transform: "translateY(-160px)" },
            "100%": { transform: "0px" },
          },
        },
      },
    },
  },
  plugins: [],
};
