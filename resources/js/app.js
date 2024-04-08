import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import VueAxios from "vue-axios";
import axios from "axios";
import NavbarComponent from "./components/user/NavbarComponent.vue";
import FooterComponent from "./components/user/FooterComponent.vue";
import IndexComponent from "./components/user/IndexComponent.vue";
import SidebarComponent from "./components/admin/SidebarComponent.vue";
import HomeAdminComponent from "./components/admin/HomeAdminComponent.vue";

const app = createApp({});
app.use(VueAxios, axios);

const router = createRouter({
    history: createWebHistory(),
    routes: [
        // Define your routes here
        {
            name: "",
            path: "/",
            component: IndexComponent,
        },

        {
            name: "",
            path: "/admin",
            component: HomeAdminComponent,
        },
    ],
});

app.component("navbar-component", NavbarComponent);
app.component("footer-component", FooterComponent);
app.component("index-component", IndexComponent);
app.component("sidebar-component", SidebarComponent);
app.component("home_admin-component", HomeAdminComponent);


app.use(router);
app.mount("#app");
