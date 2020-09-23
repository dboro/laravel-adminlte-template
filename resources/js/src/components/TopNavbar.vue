<template>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <router-link :to="{name: 'index'}" class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></router-link>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/login"><i class="fas fa-sign-out-alt"></i></a>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {

    }
</script>
