<template>
    <div>
        <router-link :to="{ name: 'fruit.index' }">Fruits</router-link>
        <router-link v-if="!accessToken" :to="{ name: 'user.login' }"
            >Login</router-link
        >
        <router-link v-if="!accessToken" :to="{ name: 'user.registration' }"
            >Registration</router-link
        >
        <router-link v-if="accessToken" :to="{ name: 'user.personal' }"
            >Personal</router-link
        >

        <router-view></router-view>
    </div>
</template>

<script setup>
import { ref, onUpdated, onMounted } from "vue";
let accessToken = ref(null);

onMounted(() => {
    getAccessToken();
});

onUpdated(() => {
    getAccessToken();
});

function getAccessToken() {
    accessToken.value = localStorage.getItem("access_token");
}
</script>
