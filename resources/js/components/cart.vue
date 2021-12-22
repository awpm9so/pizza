<template>
 <div class="cart">
     <router-link :to="{name:'catalog'}">
             <div class="catalog_link-to-cart"> На главную</div>
     </router-link>
     <h1 class="cart_title">Корзина</h1>
     <p v-if="!cart_data.length">Корзина пуста...</p>
     <cart-item
      v-for="(item, index) in cart_data"
      :key="item.id"
      :cart_item_data="item"
      @deleteFromCart="deleteFromCart(index)"
      @plusProduct="plusProduct(index)"
      @minusProduct="minusProduct(index)"
      
      />
      <div v-if="cart_data.length" class="cart_footer">
      <div class="cart_total_amount">
          <p>Общая сумма: {{cartTotalAmount}} &#8381;</p>
      </div>
      <router-link :to="{name: 'order'}">
      <button @click="makingAnOrder">Оформить заказ</button>
      </router-link>
      </div>
 </div>
</template>

<script>
import CartItem from './cart-item.vue'
import {mapActions, mapGetters} from 'vuex'

    export default {
        name: "cart",
        components: {
            CartItem
        },
        props:{
            cart_data: {
                type: Array,
                default(){
                    return []
                }
            }
        },
        data(){
            return {
            }
        },
        methods:{
            ...mapActions([
                'DELETE_FROM_CART',
                'PLUS_CART_PRODUCT',
                'MINUS_CART_PRODUCT',
                'GET_TOTAL_AMOUNT'
            ]),
            deleteFromCart(index){
                this.DELETE_FROM_CART(index)
            },
            plusProduct(index){
                this.PLUS_CART_PRODUCT(index)
            },
            minusProduct(index){
                this.MINUS_CART_PRODUCT(index)
            },
            makingAnOrder(data){
                this.GET_TOTAL_AMOUNT(data)
            }
        },
        computed:{
            ...mapGetters([
                'CART',
                'TOTAL_AMOUNT'
            ]),
            //Общая сумма корзины
            cartTotalAmount(){
                let total = 0;
                
                for (let item of this.cart_data){
                    total+=item.price * item.qty
                }
                return total;
            }
        }

    }
</script>

<style>
.cart_title{
    text-align: center;
}
.cart_total_amount{
    font-size: 18px;
}
.cart_footer{
    display: flex;
    justify-content: space-between;
}
</style>