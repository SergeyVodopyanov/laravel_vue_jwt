<template>
    <div class="w-25">
        <input
            v-model="email"
            type="email"
            class="form-control mt-3 mb-3"
            placeholder="Email"
        />
        <input
            v-model="password"
            type="password"
            class="form-control mb-3"
            placeholder="Password"
        />
        <input
            @click.prevent="login"
            type="submit"
            class="btn-btn-primary"
            placeholder="Войти"
        />
    </div>
</template>

<script setup>
import { ref } from "vue";

let email = ref("");
let password = ref("");

function login() {
    axios
        .post("/api/auth/login", {
            email: email.value,
            password: password.value,
        })
        .then(function (res) {
            localStorage.setItem("access_token", res.data.access_token);
            // const data = {
            //     name: "blabla",
            //     token: res.data.access_token,
            // };
            // localStorage.setItem("some_data", JSON.stringify(data));
        });
}
</script>
