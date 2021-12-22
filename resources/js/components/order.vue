<template>
<div class="order">
   <form method="post" action="/order/check">
       <input type="hidden" name="_token" v-bind:value="csrf"> 
        
        <h1>Оформление заказа</h1>
        <div>Общая сумма заказа: {{TOTAL_AMOUNT}}</div>
        <p>Ваш заказ: </p>
        <order-item
        v-for="item in CART"
        :key="item.id"
        :order_item_data="item"
        />
        <div class="order_form">
            <input type="text" name="customer_name" id="customer_name" placeholder="Введите ваше имя" required>
            <input type="text" name="customer_phone" id="customer_phone" placeholder="Введите номер телефона" required>
            <input type="text" name="by_what_time" id="by_what_time" placeholder="Введите время для доставки" > 
            <input type="textarea" name="street" id="street" placeholder="Введите улицу" required>
            <input type="text" name="building" id="building" placeholder="Введите дом" required>
            <input type="text" name="flat" id="flat" placeholder="Введите квартиру" required>      
            <div class="control">
                <textarea name="comment" id="comment" class="textarea is-focused" placeholder="Введите ваш коммментарий к заказу"></textarea>
            </div>
            <button type="submit">Заказать</button>   
           
        </div>    
    </form> 
</div>
</template>

<script>
import OrderItem from './order-item.vue'
import {mapGetters} from 'vuex'


    export default {
        name: "order",
        components:{
            OrderItem
        },
        props:{
            order_data:{
                type: Object,
                default(){
                    return {}
                }
            }
        },
         data(){          
          return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
       }
        },
        mounted() {},
        computed:{
            ...mapGetters([
                'CART',
                'TOTAL_AMOUNT'
            ])
        },
    }
</script>

<style>
.order{
    align-items: center;
     text-align: center;
}
.order_form{
    display: flex;
    flex-flow: column;    
}

.order_form input,textarea, select{
    margin: 10px;
    padding: 20px;
    width:400px;
    box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
    border-radius:10px;
}
.order_form button{
font-size: 18px;
padding: 10px;
}
.order_total_amount{
    font-weight: 600;  
}
</style>