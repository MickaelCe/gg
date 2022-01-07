<template>
  <div class="carousel">
      <slot :currentSlide="currentSlide"/>
      <div class="pagination">
          <div v-for="(slide, index) in getSlideCount" :key="index" :class="{ active : index + 1 === currentSlide }">
              <img @click="goToSlide(index)" v-if="slide === 1" :src="require(`../assets/dl4d.png`).default" class="paginationImg">
              <img @click="goToSlide(index)" v-else-if="slide === 2" :src="require(`../assets/dark.png`).default" class="paginationImg">
              <img @click="goToSlide(index)" v-else-if="slide === 3" :src="require(`../assets/dnier.png`).default" class="paginationImg">
              <img @click="goToSlide(index)" v-else-if="slide === 4" :src="require(`../assets/dre.png`).default" class="paginationImg">
          </div>
      </div>
  </div>
</template>

<script>
import { ref, reactive , onMounted} from '@vue/composition-api'
export default {
    setup() {
        const currentSlide = ref(1);
        const getSlideCount = ref(null);
        const autoPlayEnable = ref(true);
        const timeoutDuration = ref(5000);

        const goToSlide = (index) =>{
            currentSlide.value = index + 1;
        }

        const nextSlide = () => {
            if(currentSlide.value === getSlideCount.value){
                currentSlide.value = 1;
                return;
            }
            currentSlide.value +=1;
        }

        const autoPlay = () => {
            setInterval(() =>{
                nextSlide()
            }, timeoutDuration.value);
        };

        if(autoPlayEnable.value){
            autoPlay();
        }

        onMounted(() =>{
            getSlideCount.value = document.querySelectorAll('.slide').length;
        });
        return { currentSlide, getSlideCount, goToSlide};
    },
}
</script>

<style>

</style>