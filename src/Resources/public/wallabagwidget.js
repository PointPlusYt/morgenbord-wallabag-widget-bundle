import { createApp } from 'vue';

const wallabagWidget = createApp({
    data() {
      return {
        demoText: 'Hello World',
      }
    },
    compilerOptions: {
      delimiters: ["${", "}$"]
    },
  });

const mountedWallabagWidget = wallabagWidget.mount('#wallabagWidget');