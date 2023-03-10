import path from 'path'
import { defineConfig } from 'vite'
import liveReload from 'vite-plugin-live-reload'

export default () => {
  return defineConfig({
    root: '',
    // TODO: configurar .env
    base: process.env.NODE_ENV === 'development' ? '/' : '/dist/',

    server: {
      port: 3000,
      cors: true,
      https: false
    },

    build: {
      outDir: 'dist',
      assetsDir: './',
      copyPublicDir: true,
      manifest: true,
      minify: true,
      write: true,
      // TODO: mudar target pra outro?
      target: 'es2018'
    },

    rollupOptions: {
      input: {
        // TODO: suprimir o erro do console de que não foi possível determinar o entry point (colocar o main.js também não funciona)
        main: path.resolve(__dirname, '/main.js')
      }
    },

    plugins: [
      liveReload('./**/*.php')
    ]
  })
}
