<template>
     <div class="columns">
        <div v-for="card in cards" class="column">
            <div class="card">
                <img :src="card.img" alt="Ветчина и грибы"/>
                <div>{{card.title}}</div>
                <div>{{card.description}}</div>
                <button class="button is-success is-outlined">В корзину</button>
            </div>
    
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                cards:[
                    {
                        title:"Ветчина и грибы",
                        description: " Ветчина, шампиньоны, увеличинная порция моцареллы, томатный соус",
                        img:"./img/1.jpeg"
                    },
                    {
                        title:"Гавайская",
                        description: "Ветчина, ананасы, моцарелла, томатный соус",
                        img:"../img/2.jpeg"
                    },
                    {
                        title:"Двойной цыпленок",
                        description: " Цыпленок, моцарелла, соус альфредо",
                        img:"./img/3.jpeg"
                    }
                ]
            }
        }
    }
</script>
