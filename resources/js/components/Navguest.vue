<template>
<nav class="navbar navbar-dark bg-dark">
    <a href="/" class="text-white btn">Angie</a>
    <span>
        <a href="login" class="text-white btn btn-sm border ">Login</a>
        <a href="register" class="text-white btn btn-sm border">Register</a>
    </span>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
