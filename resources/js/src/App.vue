<template>
    <div>
        <top-navbar></top-navbar>
        <main-sidebar></main-sidebar>
        <router-view />
    </div>

</template>

<script>
    // import VueExtendLayouts from 'vue-extend-layout'
    import MainSidebar from "./components/MainSidebar";
    import TopNavbar from "./components/TopNavbar";

    export default {
        name: 'App',
        components: { MainSidebar, TopNavbar }
    }
</script>
