<template>
    <div class="catalog">
        <catalog-item 
            v-for="product in products"
            :key="product.id"
            :product_data="product"
            @sendDataToParent="showChildTitleInConsole"

        />

    </div>
</template>

<script>
import CatalogItem from './catalog-item.vue'

    export default {
        name: "catalog",
        components: {
            CatalogItem
        },
        props:{},
        data(){
            return {
                products:[
                    {
                        id: "1",
                        title:"Ветчина и грибы",
                        description: " Ветчина, шампиньоны, увеличинная порция моцареллы, томатный соус",
                        img:"./img/1.jpeg"
                    },
                    {
                        id: "2",
                        title:"Гавайская",
                        description: "Ветчина, ананасы, моцарелла, томатный соус",
                        img:"./img/2.jpeg"
                    },
                    {
                        id: "3",
                        title:"Двойной цыпленок",
                        description: " Цыпленок, моцарелла, соус альфредо",
                        img:"./img/3.jpeg"
                    },
                    {
                        id: "4",
                        title:"Пепперони",
                        description: "Пикантная пепперони, увеличенная порция моцареллы, томатный соус",
                        img:"./img/4.jpeg"
                    },
                    {
                        id: "5",
                        title:"Мясная",
                        description: "Цыпленок, ветичина, пикантная пеппирони, острая чоризо, моцарелла, томатный соус",
                        img:"./img/5.jpeg"
                    },
                    {
                        id: "6",
                        title:"Четрые сезона",
                        description: "Увеличенная морция моцереллы, ветчина, пикантная пеппирони, кубики брынзы, томаты, шампиньоны, итальянские травы, томатный соус",
                        img:"./img/6.jpeg"
                    }
                ]
            }
        },
        methods:{
            showChildTitleInConsole(data){
                console.log(data)
            }
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