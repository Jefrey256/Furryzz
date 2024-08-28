module.exports = {
  darkMode: 'class', // Use 'class' em vez de 'selector' para o modo escuro
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        cor1: 'var(--cor1)',
        cor2: 'var(--cor2)',
        cor3: 'var(--cor3)',
        cor4: 'var(--cor4)',
        cor5: 'var(--cor5)',
      },
    },
  },
  plugins: [],
};
