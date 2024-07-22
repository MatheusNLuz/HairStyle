/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./assets/**/*.js",
      "./templates/**/*.html.twig"
  ],
  theme: {
    extend: {
        colors: {
            'primary': "#1F2937"
        }
    },
  },
  plugins: [],
}

