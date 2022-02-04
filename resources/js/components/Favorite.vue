<template>
    <div>
        <input type="text" v-model='q' class="form-control inputsearch" placeholder="Favorites...">
        <div class="searchDesk">
            <div class="searchDesk">
            <div v-for="game in getFilteredfavorites" v-bind:key="game.id" class="searchDeskImg">
                <div class="card my-3 bg-transparent">
                <a :href="`/show/${game.id}`" data-aos="fade-left"><span class="badge btn-action">{{game.categories | truncate(13, '...')}}</span><img :src="`${game.img_url}`" class="imgsearch" alt="Couverture du jeux" /></a>
                </div>
            </div>
            </div>
            <div v-observe-visibility="handleScrolledToBottom"></div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                favorites: [],
                q: '',
                page: 20,
            }
        },

        filters: {
        truncate: function(data,num){
            const reqdString = 
              data.split("").slice(0, num).join("");
            return reqdString;
        }
    },

        methods: {
            fetchfavorites() {
                axios.get(`/api/favorites`)
                .then (response => {
                    this.favorites = response.data;
                })
                .catch (error => {
                    console.log(error)
                })
            },
                handleScrolledToBottom (isVisible){
                    if (!isVisible) { return }
                    this.page+=10;
                    this.fetchfavorites()
                },
        },


        // computed: {
        //     getFilteredfavorites(){
        //         return this.favorites.filter(favorites => {
        //             return favorites.names.toLowerCase().includes(this.q.toLowerCase())
        //         }).slice(0,this.page);
        //     },
        // },

            beforeMount(){
                axios.get(`/api/favorites`)
                .then (response => {
                    console.log(response.data);
                })          
            },

            mounted() {
                this.fetchfavorites();
            }
    }
</script>
