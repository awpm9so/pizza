<template>
<div>
    <h1 class="catalog_title">Каталог</h1>
    <div class="catalog">
        <router-link :to="{name:'cart',params: {cart_data:CART}}">
             <div class="catalog_link-to-cart">Корзина: {{CART.length}}</div>
        </router-link>
        <catalog-item 
            v-for="product in PRODUCTS"
            :key="product.id"
            :product_data="product"
            @addToCart="addToCart"
        />
    </div>
</div>
</template>

<script>
import CatalogItem from './catalog-item.vue'
import {mapActions, mapGetters} from 'vuex'

    export default {
        name: "catalog",
        components: {
            CatalogItem
        },
        props:{},
        data(){
            return {
               
            }
        },
        methods:{
            ...mapActions([
                'GET_PRODUCTS',
                'ADD_TO_CART'
            ]),
            addToCart(data){
                this.ADD_TO_CART(data)
            },
        },
        mounted(){
            this.GET_PRODUCTS()
        },
        computed:{
            ...mapGetters([
                'PRODUCTS',
                'CART'
            ])
        }

    }
</script>

<style>
.catalog{
    display:flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items:center;
}
  .catalog_link-to-cart{
      position: absolute;
      top: 10px;
      right: 10px;
      padding: 16px;
      border: solid 2px  #aeaeae;
  }
.catalog_title{
    text-align: center;
}
</style>