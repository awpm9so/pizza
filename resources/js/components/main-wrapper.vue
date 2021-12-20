<template>
    <div class="main-wrapper">
        <catalog />
        <cart />
    </div>    
</template>

<script>
import Catalog from './catalog.vue'
import Cart from './cart.vue'


    export default {
        name: "main-wrapper",
        components: {
            Catalog,
            Cart
        },
        props:{},
        data(){
            return {

            }
        },

    }
</script>

<style>
.main-wrapper{
    display: flex;
    justify-content: center;
    align-content: center;
    margin: 0 auto;
   
}
</style>