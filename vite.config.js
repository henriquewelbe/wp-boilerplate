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
      emptyOutDir: true,
      copyPublicDir: true,
      manifest: true,
      minify: true,
      write: true,
      // TODO: mudar target pra outro?
      target: 'es2018',
      rollupOptions: {
        input: 'main.js'
      }
    },

    plugins: [
      liveReload('./**/*.php')
    ]
  })
}
