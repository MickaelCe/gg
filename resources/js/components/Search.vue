<template>
    <div>
        <input type="text" v-model='q' class="form-control inputsearch" placeholder="Rechercher un jeux...">
        <div v-if="q != ''">
            <div v-for="game in getFilteredGames" v-bind:key="game.names">
                <div class="card my-3 bg-transparent">
                    <a href="#"><img :src="`${game.img_url}`" class="imgsearch" alt="Couverture du jeux" /></a>
                </div>
            </div>
        </div>
            <div v-else>
                <h2>Faites une recherche</h2>
            </div>

        <div v-observe-visibility="handleScrolledToBottom"></div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                games: [],
                q: '',
                page: 1
            }
        },

        methods: {
            fetchGames() {
                axios.get(`/api/games?page=${this.page}`)
                .then (response => {
                    console.log(response.data.data);
                    this.games.push(...response.data.data);
                })
                .catch (error => {
                    console.log(error)
                })
            },
                handleScrolledToBottom (isVisible){
                    if (!isVisible) { return }
                    this.page++
                    this.fetchGames()
                }   
        },

        

        computed: {
            getFilteredGames(){
                return this.games.filter(games => {
                    return games.names.toLowerCase().includes(this.q.toLowerCase());
                })
            }
        },

        mounted() {
            this.fetchGames();
        }
    }
</script>
