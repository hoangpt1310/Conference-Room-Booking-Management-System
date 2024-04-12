import {createApp} from "vue";
import {createRouter, createWebHistory} from "vue-router";
import VueAxios from "vue-axios";
import axios from "axios";
import NavbarComponent from "./components/user/includes/NavbarComponent.vue";
import FooterComponent from "./components/user/includes/FooterComponent.vue";
import HomeComponent from "./components/user/pages/default/HomeComponent.vue";
import AboutComponent from "./components/user/pages/default/AboutComponent";

const app = createApp({});
app.use(VueAxios, axios);

const router = createRouter({
        history: createWebHistory(),
        routes: [
            {
                path: '/',
                component: HomeComponent
            },
            {
                path: '/about',
                component: AboutComponent
            },
        ],
    });

app.component("navbar-component", NavbarComponent);
app.component("footer-component", FooterComponent);
app.component("home-component", HomeComponent);
app.component("about-component", AboutComponent);

app.use(router);
app.mount("#app");
