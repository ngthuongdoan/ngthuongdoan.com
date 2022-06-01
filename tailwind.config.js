module.exports = {
  content: [
    './pages/**/*.{ts,tsx}',
    './components/**/*.{ts,tsx}',
    './containers/**/*.{ts,tsx}',
    './constants/**/*.{ts,tsx}',
    './types/**/*.{ts,tsx}',
  ],
  theme: {
    extend: {
      colors: {
        swatch_1: '#fafafa',
        swatch_2: '#b7c6c9',
        swatch_3: '#161515',
        swatch_4: '#c6b099',
        swatch_5: '#5f5e5e',
        swatch_6: '#b46e53',
        swatch_7: '#5e2d1f',
      },
      fontFamily: {
        'source-sans': "'Source Sans Pro', sans-serif",
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
}
