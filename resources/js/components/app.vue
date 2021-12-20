<template>
    <main-wrapper />
</template>

<script>
import MainWrapper from './main-wrapper.vue'

    export default {
        name: "app",
        components: {
            MainWrapper
        },
        props:{},
        data(){
            return {
                
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>

</style>