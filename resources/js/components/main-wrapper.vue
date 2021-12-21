<template>
    <div class="main-wrapper">
        <keep-alive>
            <router-view></router-view>
        </keep-alive>
    </div>    
</template>

<script>

    export default {
        name: "main-wrapper",
        props:{},
        data(){
            return {}
        },
        computed:{},

    }
</script>

<style>
.main-wrapper{
    display: flex;
    justify-content: center;
    align-content: center;
    margin: 0 auto;
}
header{
    height: 100px;
}
</style>