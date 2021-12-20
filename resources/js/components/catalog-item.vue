<template>
 <div class="catalog-item">
        <img :src="product_data.img" :alt="product_data.title"/>
        <p class="catalog-item_title">{{product_data.title}}</p>
        <p class="catalog-item_description">{{product_data.description}}</p>
        <button 
            class="catalog-item_btn" 
            @click="sendDataToParent"
            >В корзину
            </button>
 </div>
 
</template>

<script>


    export default {
        name: "catalog-item",
        props:{
            product_data:{
                type: Object,
                default(){
                    return{}
                }
            }
        },
        data(){
            return {}
        },
        methods:{
            sendDataToParent(){
                this.$emit('sendDataToParent', this.product_data.title)
            }
        },

    }
</script>

<style>
.catalog-item{
    flex-basis: 25%;
    box-shadow: 0 0 8px 0 #e0e0e0;
    padding: 16px;
    margin-bottom: 8px;
}
</style>