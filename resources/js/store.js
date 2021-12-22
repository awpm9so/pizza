import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'


Vue.use(Vuex)

let store = new Vuex.Store({
 state:{
     products:[],
     cart:[],
     total_amount: 0
 },
 mutations:{
    SET_PRODUCTS_TO_STATE: (state, products) => {
        state.products = products
    },
    SET_CART: (state, product) => {
        //если товар уже есть в корзине и повторно жмут "в корзуну",
        //то увеличивается поле qty (количество). Если экзеппляров товара в козине нет, то тогда он добавляется 
        if (state.cart.length){
            let isProductExist = false
            state.cart.map(function(item){
                if (item.id === product.id){
                    isProductExist = true
                    item.qty++
                }
            })
            if (!isProductExist){
                state.cart.push(product)
            }
        }
        else{
            state.cart.push(product)
        } 
    },
    REMOVE_FROM_CART: (state, index) => {
        state.cart[index].qty = 1
        state.cart.splice(index,1)
    },
    PLUS_PRODUCT: (state, index) => {
        state.cart[index].qty++
    },
    MINUS_PRODUCT: (state, index) => {
        if (state.cart[index].qty > 1){
            state.cart[index].qty--
        }
    },
    GET_TOTAL_AMOUNT: (state, data) =>{
        let total = 0;
                
        for (let item of state.cart){
            total+=item.price * item.qty
        }
        state.total_amount = total
    }
 },
 actions:{
     GET_PRODUCTS({commit}){
        return axios('http://localhost:8000/getPizzaList', {
            method: 'GET'
        })
        .then((products) => {
            commit('SET_PRODUCTS_TO_STATE', products.data)
            return products
        })
        .catch((error) => {
            console.log(error)
            return error
        })
     },
     ADD_TO_CART({commit}, product){
         commit('SET_CART', product)
     },
     DELETE_FROM_CART({commit}, index){
         commit('REMOVE_FROM_CART', index)
     },
     PLUS_CART_PRODUCT({commit}, index){
        commit('PLUS_PRODUCT', index)
     },
     MINUS_CART_PRODUCT({commit}, index){
        commit('MINUS_PRODUCT', index)
     },
     GET_TOTAL_AMOUNT({commit}, data){
        commit('GET_TOTAL_AMOUNT', data)
     }
 },
 getters:{
     PRODUCTS(state){
         return state.products;
     },
     CART(state){
         return state.cart;
     },
     TOTAL_AMOUNT(state){
         return state.total_amount
     }
 },
 
})

export default store