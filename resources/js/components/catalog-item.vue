<template>
 <div class="catalog-item">
        <img :src="product_data.img" :alt="product_data.title"/>
        <p class="catalog-item_title">{{product_data.title}}</p>
        <p class="catalog-item_description">{{product_data.description}}</p>
         <p class="catalog-item_price">{{product_data.price}} &#8381;</p>
        <button 
            class="catalog-item_btn" 
            @click="addToCart"
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
            addToCart(){
                this.$emit('addToCart', this.product_data)
            }
        },
        mounted(){
            this.$set(this.product_data, 'qty', 1)
        },
    }
</script>

<style>
.catalog-item{
    flex-basis: 25%;
    box-shadow: 0 0 8px 0 #e0e0e0;
    padding: 16px;
    margin-bottom: 16px;

}
.catalog-item_title{
    font-weight: 600;  
}
</style>