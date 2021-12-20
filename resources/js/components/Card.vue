<template>
     <div class="columns">
        <div v-for="card in cards" class="column" :key="card.id">
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
                        id: "1",
                        title:"Ветчина и грибы",
                        description: " Ветчина, шампиньоны, увеличинная порция моцареллы, томатный соус",
                        img:"./img/1.jpeg"
                    },
                    {
                        id: "2",
                        title:"Гавайская",
                        description: "Ветчина, ананасы, моцарелла, томатный соус",
                        img:"../img/2.jpeg"
                    },
                    {
                        id: "3",
                        title:"Двойной цыпленок",
                        description: " Цыпленок, моцарелла, соус альфредо",
                        img:"./img/3.jpeg"
                    }
                ]
            }
        }
    }
</script>
