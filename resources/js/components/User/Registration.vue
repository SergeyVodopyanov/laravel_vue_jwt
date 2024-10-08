<template>
    <div class="w-25">
        <input
            v-model="name"
            type="text"
            class="form-control bt-3 mb-3"
            placeholder="Name"
        />
        <input
            v-model="email"
            type="email"
            class="form-control mb-3"
            placeholder="Email"
        />
        <input
            v-model="password"
            type="password"
            class="form-control mb-3"
            placeholder="Password"
        />
        <input
            v-model="password_confirmation"
            type="password"
            class="form-control mb-3"
            placeholder="Confirm Password"
        />

        <input
            @click.prevent="store"
            type="submit"
            class="btn-btn-primary"
            placeholder="Войти"
        />
    </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";

let name = ref(null);
let email = ref(null);
let password = ref(null);
let password_confirmation = ref(null);

function store() {
    axios
        .post("/api/users", {
            name: name.value,
            email: email.value,
            password: password.value,
            password_confirmation: password_confirmation.value,
        })
        .then(function (res) {
            console.log(res);
        });
}
</script>
