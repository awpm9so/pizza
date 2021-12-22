<template>
    <div class="order-item">
        <span class="order-item_title">{{order_item_data.title}}</span>
        <span>в количестве: {{order_item_data.qty}}</span>
   </div>
</template>

<script>
    export default {
        name: "order-item",
        props:{
            order_item_data:{
                type: Object,
                default(){
                    return {}
                }
            }
        },
    }
</script>

<style>
.order-item_title{
    font-weight: 600;  
}
</style>