<template>
 <div class="cart-item">
        <img :src="cart_item_data.img" :alt="cart_item_data.title"/>
        <div class="cart-item_info">
        <p class="cart-item_title">{{cart_item_data.title}}</p>
        <p class="cart-item_description">{{cart_item_data.description}}</p>
        <p class="cart-item_price">{{cart_item_data.price}} &#8381;</p>
        <div class="cart-item_qty">
            <span>Количество: </span> 
            <span><button @click="minusProduct">-</button></span>          
            <span>{{cart_item_data.qty}}</span>
             <span><button @click="plusProduct">+</button></span>     
        </div>
        </div>
        <button @click="deleteFromCart">Удалить</button>
 </div>
</template>

<script>

    export default {
        name: "cart-item",
        components: {},
        props:{
            cart_item_data:{
                type: Object,
                default(){
                    return {}
                }
            }
        },
        data(){
            return {}
        },       
        methods:{
            deleteFromCart(){
                this.$emit('deleteFromCart')
            },
            plusProduct(){
                this.$emit('plusProduct')
            },
            minusProduct(){
                this.$emit('minusProduct')
            }
        }
    }
</script>

<style>
.cart-item{
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 0 8px 0 #e0e0e0;
    padding: 16px;
    margin-bottom: 8px;
}
.cart-item_title{
     font-weight: 600;
     font-size: 21pt;
}
.cart-item_info{
    display: block;
    padding: 25px;
}
.cart-item_description{
    max-width: 400px;
}
</style>