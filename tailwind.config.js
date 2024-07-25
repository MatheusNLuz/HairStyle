/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./assets/**/*.js",
      "./templates/**/*.html.twig",
      "node_modules/preline/dist/*.js"
  ],
  theme: {
    extend: {
        colors: {
            'primary': "#1F2937"
        }
    },
  },
  plugins: [
      require('preline/plugin'),
  ],
}

