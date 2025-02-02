import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/js/app.js'],
      refresh: true,
    }),
  ],
  server: {
    hmr: false // Desactivar HMR para producción (correctamente configurado)
  },
  build: {
    commonjsOptions: {
      transformMixedEsModules: true
    }
  }
});
