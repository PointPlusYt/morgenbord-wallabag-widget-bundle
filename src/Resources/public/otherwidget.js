import { createApp } from 'vue';

const wallabagWidget = createApp({
    data() {
      return {
        bite: 'Grosse bite',
      }
    },
    compilerOptions: {
      delimiters: ["${", "}$"]
    },
  });

const mountedWallabagWidget = wallabagWidget.mount('#other');