<template>
<div class="home">
    <Carousel class="carousel" v-slot="{ currentSlide }">
        <Slide v-for="(slide, index) in carouselSlides" v-bind:key="index">
                <span>
                <img v-show="currentSlide === index + 1" :src="require(`../assets/${slide}.png`).default" alt="" class="spanImg">
                <div v-if="currentSlide === 1" class="mask d-flex justify-content-center align-items-end flex-column text-white pr-3 pb-3 px-5">
                    <span class='action'>Survive <span class='text-white'>with</span></span> you friends
                    <blockquote class="blockquote btmHome">
                        “Trust me I know how<br>to crown a witch...” 
                        <figcaption class="blockquote-footer">
                            Famous last words
                        </figcaption>
                    </blockquote>
                    <div class="h3 d-flex justify-content-center align-items-center mx-4">
                        <a href='' class="m-0 px-2"><i class="far fa-star action"></i> Add to favorite</a> OR
                        <a class="btn btn-action mx-4" target="_blank" href="/show/767">EXPLORE</a>
                    </div>
                </div>
                <div v-else-if="currentSlide === 2" class="mask d-flex justify-content-center align-items-end flex-column text-white pr-3 pb-3 px-5">
                    <span class='action'>Oscar <span class='text-white'>rédige</span></span> nous un truc
                    <blockquote class="blockquote btmHome">
                        “bruh” 
                        <figcaption class="blockquote-footer">
                            Raph
                        </figcaption>
                    </blockquote>
                    <div class="h3 d-flex justify-content-center align-items-center mx-4">
                        <a href='' class="m-0 px-2"><i class="far fa-star action"></i> Add to favorite</a> OR
                        <a class="btn btn-action mx-4" target="_blank" href="/show/54">EXPLORE</a>
                    </div>
                </div>
                <div v-else-if="currentSlide === 3" class="mask d-flex justify-content-center align-items-end flex-column text-white pr-3 pb-3 px-5">
                    <span class='action'>Experience</span> deep stories
                    <blockquote class="blockquote btmHome">
                        “oui oui oui oui” 
                        <figcaption class="blockquote-footer">
                            Moi
                        </figcaption>
                    </blockquote>
                    <div class="h3 d-flex justify-content-center align-items-center mx-4">
                        <a href='' class="m-0 px-2"><i class="far fa-star action"></i> Add to favorite</a> OR
                        <a class="btn btn-action mx-4" target="_blank" href="/show/465">EXPLORE</a>
                    </div>
                </div>
                <div v-else-if="currentSlide === 4" class="mask d-flex justify-content-center align-items-end flex-column text-white pr-3 pb-3 px-5">
                    <span class='action'>Revive <span class='text-white'>the</span></span> nightmare
                    <blockquote class="blockquote btmHome">
                        “Mettre une caption ici” 
                        <figcaption class="blockquote-footer">
                            Moi
                        </figcaption>
                    </blockquote>
                    <div class="h3 d-flex justify-content-center align-items-center mx-4">
                        <a href='' class="m-0 px-2"><i class="far fa-star action"></i> Add to favorite</a> OR
                        <a class="btn btn-action mx-4" target="_blank" href="/show/235">EXPLORE</a>
                    </div>
                </div>
                </span>
        </Slide>
    </Carousel>
</div>   
</template>

<script>

import Carousel from "./Carousel.vue";
import Slide from "./Slide.vue";

export default {
        name: "Home",
        components: { Carousel, Slide },
        data(){
            return{
                carouselSlides: ["dl4d","dark","dnier","dre"],
            };
        },
};


</script>

<style>

</style>