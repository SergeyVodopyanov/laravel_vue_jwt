import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: "/fruits",
            component: () => import("./components/Fruit/Index.vue"),
            name: "fruit.index",
        },
    ],
});

export default router;
