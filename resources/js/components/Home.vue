<template>
<div class="home">
    <Carousel class="carousel" v-slot="{ currentSlide }">
        <Slide v-for="(slide, index) in carouselSlides" v-bind:key="index">
                <img v-show="currentSlide === index + 1" :src="require(`../assets/${slide}.png`).default" alt="">
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