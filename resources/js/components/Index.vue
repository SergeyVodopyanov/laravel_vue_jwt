<template>
    <div>
        <router-link :to="{ name: 'fruit.index' }">Fruits</router-link>
        <router-link :to="{ name: 'user.login' }">Login</router-link>
        <router-link :to="{ name: 'user.registration' }"
            >Registration</router-link
        >
        <router-link :to="{ name: 'user.personal' }">Personal</router-link>

        <router-view></router-view>
    </div>
</template>
