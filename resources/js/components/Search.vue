<template>
    <div>
        <input type="text" v-model='q' class="form-control inputsearch" placeholder="Search a game...">
        <div v-if="q != ''">
            <div v-for="game in getFilteredGames" v-bind:key="game.id">
                <div class="card my-3 bg-transparent">
                    <a href="#" data-aos="fade-left"><img :src="`${game.img_url}`" class="imgsearch" alt="Couverture du jeux" /></a>
                </div>
            </div>
            <div v-observe-visibility="handleScrolledToBottom"></div>
        </div>
            <div v-else-if="q == ''">
            <h4 class="text-white text-center py-4">or <span class="action">scroll</span> to find new ones</h4>
            <div v-for="randomgame in getRandomFilteredGames" v-bind:key="randomgame.id">
                <div class="card my-3 bg-transparent">
                    <a href="#" data-aos="fade-left"><img :src="`${randomgame.img_url}`" class="imgsearch" alt="Couverture du jeux" /></a>
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
                page: 5,
                pagerandom: 5
            }
        },

        methods: {
            // fetchGames() {
            //     axios.get(`/api/games?page=${this.page}`)
            //     .then (response => {
            //         this.games.push(...response.data.data);
            //         console.log(this.page);
            //     })
            //     .catch (error => {
            //         console.log(error)
            //     })
            // },
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
