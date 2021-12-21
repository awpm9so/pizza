<template>
    <div class="catalog">
        <catalog-item 
            v-for="product in PRODUCTS"
            :key="product.id"
            :product_data="product"
            @sendDataToParent="showChildTitleInConsole"

        />

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
                'GET_PRODUCTS'
            ]),
            showChildTitleInConsole(data){
                console.log(data)
            }
        },
        mounted(){
            this.GET_PRODUCTS()
        },
        computed:{
            ...mapGetters([
                'PRODUCTS'
            ])
        }

    }
</script>

<style>
.catalog{
    display:flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}
</style>