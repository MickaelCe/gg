<template>
    <div>
        <input type="text" v-model='q' class="form-control inputsearch" placeholder="Rechercher un jeux...">
        <div v-if="q != ''">
            <div v-for="game in getFilteredGames" v-bind:key="game.id">
                <div class="card my-3 bg-transparent">
                    <a href="#"><img :src="`${game.img_url}`" class="imgsearch" alt="Couverture du jeux" /></a>
                </div>
            </div>
            <div v-observe-visibility="handleScrolledToBottom"></div>
        </div>
            <div v-else>
                <h2 class="text-white">Faites une recherche</h2>
            </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                games: [],
                q: '',
                page: 5
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
                    console.log(response.data);
                    this.games = response.data;
                })
                .catch (error => {
                    console.log(error)
                })
            },
                handleScrolledToBottom (isVisible){
                    if (!isVisible) { return }
                    this.page+=10
                    this.fetchGames()
                },
        },

        computed: {
            getFilteredGames(){
                return this.games.filter(games => {
                    return games.names.toLowerCase().includes(this.q.toLowerCase())
                }).slice(0,this.page);
            },
        },
            mounted() {
                this.fetchGames();
            }
    }
</script>
