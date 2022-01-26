<template>
    <div>
        <input type="text" v-model='q' class="form-control inputsearch" placeholder="Search a game...">
        <div v-if="q != ''" class="searchDesk">
            <div class="searchDesk">
            <div v-for="game in getFilteredGames" v-bind:key="game.id" class="searchDeskImg">
                <div class="card my-3 bg-transparent">
                <a :href="`/show/${game.id}`" data-aos="fade-left"><span class="badge btn-action">{{game.categories | truncate(13, '...')}}</span><img :src="`${game.img_url}`" class="imgsearch" alt="Couverture du jeux" /></a>
                </div>
            </div>
            </div>
            <div v-observe-visibility="handleScrolledToBottom"></div>
        </div>
            <div v-else-if="q == ''"  >
            <h4 class="text-white text-center py-4 h4Desk">or <span class="action">scroll</span> to find new ones</h4>
            <div class="searchDesk">
                <div v-for="randomgame in getRandomFilteredGames" v-bind:key="randomgame.id" class="searchDeskImg">
                    <div class="card my-3 bg-transparent">
                        <a :href="`/show/${randomgame.id}`" data-aos="fade-left"><span class="badge btn-action">{{randomgame.categories | truncate(13, '...')}}</span><img :src="`${randomgame.img_url}`" class="imgsearch" alt="Couverture du jeux" /></a>
                    </div>
                </div>
            </div>
            <div v-observe-visibility="handleScrolledToBottomRand"></div>
            </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                games: [],
                randomgames: [],
                q: '',
                page: 20,
                pagerandom: 20
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
            fetchGames() {
                axios.get(`/api/games`)
                .then (response => {
                    this.games = response.data;
                })
                .catch (error => {
                    console.log(error)
                })
            },
                handleScrolledToBottom (isVisible){
                    if (!isVisible) { return }
                    this.page+=10;
                    this.fetchGames()
                },
                handleScrolledToBottomRand (isVisible){
                    if (!isVisible) { return }
                    this.pagerandom+=5;
                    this.fetchGames()
                },
        },


        computed: {
            getFilteredGames(){
                return this.games.filter(games => {
                    return games.names.toLowerCase().includes(this.q.toLowerCase())
                }).slice(0,this.page);
            },
            getRandomFilteredGames(){
                return this.randomgames.filter(randomgames => {
                    return randomgames.names.toLowerCase().includes(this.q.toLowerCase())
                }).slice(0,this.pagerandom);
            },
        },

            beforeMount(){
                axios.get(`/api/randomgames`)
                .then (response => {
                    return this.randomgames = response.data;
                })          
            },

            mounted() {
                this.fetchGames();
            }
    }
</script>
