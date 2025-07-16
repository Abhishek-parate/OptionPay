/** @type {import('tailwindcss').Config} */
export default {
  content: ["./**/*.{html,js,php}", "./includes/**/*.php", "./assets/js/**/*.js"],
  darkMode: "class", // Use class strategy for dark mode
  theme: {
    extend: {
      colors: {
        primary: {
          100: "#D1D9E1",
          200: "#A3B3C3",
          300: "#758DA5",
          400: "#476787",
          500: "#183453",
          600: "#152F4B",
          700: "#122A43",
          800: "#0F253B",
          900: "#0C2033"
         },
        secondary: {
          100: "#D3EDDA",
          200: "#A8DBB8",
          300: "#7EC995",
          400: "#53B773",
          500: "#22AA47",
          600: "#1F9940",
          700: "#1A8839",
          800: "#167732",
          900: "#12662B"
        },
        accent: {
          100: "#e6f7fa",
          200: "#cceff5",
          300: "#99dfeb",
          400: "#66cfe0",
          500: "#33bfd6",
          600: "#00afc6",
          700: "#008c9e",
          800: "#006977",
          900: "#00454f",
        },
        success: {
          100: "#e8f5e9",
          200: "#d1ebd3",
          300: "#a3d7a7",
          400: "#76c47c",
          500: "#48b050",
          600: "#3c9d48",
          700: "#2e7d3a",
          800: "#235e2c",
          900: "#19401e",
        },
        danger: {
          100: "#ffebee",
          200: "#ffd7dc",
          300: "#ffafba",
          400: "#ff8797",
          500: "#ff5f75",
          600: "#ff3751",
          700: "#cc2c41",
          800: "#992131",
          900: "#661620",
        },
      },
      boxShadow: {
        dark: '0 4px 6px -1px rgba(0, 0, 0, 0.3), 0 2px 4px -1px rgba(0, 0, 0, 0.26)',
      },
      animation: {
        'fade-in': 'fadeIn 0.3s ease-in-out',
        'fade-out': 'fadeOut 0.3s ease-in-out',
        'slide-in': 'slideIn 0.4s ease-out',
        'scroll': 'scroll 30s linear infinite',
        'pulse-scale': 'pulseScale 0.4s ease-out', // New animation for tab selection
        'bounce-once': 'bounceOnce 0.3s ease-out', // New animation for tab selection
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0', transform: 'translateY(10px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        fadeOut: {
          '0%': { opacity: '1', transform: 'translateY(0)' },
          '100%': { opacity: '0', transform: 'translateY(10px)' },
        },
        slideIn: {
          '0%': { transform: 'translateX(20px)', opacity: '0' },
          '100%': { transform: 'translateX(0)', opacity: '1' },
        },
        scroll: {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(-50%)' },
        },
        pulseScale: {
          '0%': { transform: 'scale(1)' },
          '50%': { transform: 'scale(1.05)' },
          '100%': { transform: 'scale(1)' },
        },
        bounceOnce: {
          '0%': { transform: 'translateY(0)' },
          '40%': { transform: 'translateY(-10px)' },
          '70%': { transform: 'translateY(-4px)' },
          '100%': { transform: 'translateY(0)' },
        },


      },
    },
    fontFamily: {
      inter: ["Inter", "sans-serif"],
    },
  },
  plugins: [],
};