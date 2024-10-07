import "./bootstrap";
import { createApp } from "vue";
import { createPinia } from 'pinia';
//Ant Design Vue
import {
    Drawer,
    List,
    Menu,
    Button, 
    message 
} from 'ant-design-vue';

import App from "./App.vue";
import router from "../router/index.js";
//Ant Design Vue CSS
import 'ant-design-vue/dist/reset.css';
//Bootstrap CSS
import 'bootstrap/dist/css/bootstrap-grid.min.css';
import 'bootstrap/dist/css/bootstrap-utilities.min.css';
//Font Awesome Icon
import '../static/fontawesome/css/all.min.css';

const app = createApp(App);
const pinia = createPinia()

app.use(pinia);
app.use(router);
app.use(Button);
app.use(Drawer);
app.use(List);
app.use(Menu);
// Mount the app to the #app div in the main blade file
app.mount("#app");

app.config.globalProperties.$message = message;