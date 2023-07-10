<template>
    <carousel :items-to-show="1" :autoplay="5000" :wrap-around="true" class="relative">
    <slide v-for="slide in 1" :key="slide">
        <img src="../../../../public/img/banner.jpg" class="h-screen">
    </slide>


    <template #addons>
      <navigation />
      <pagination class="absolute bottom-3 left-1/2 translate-x-[-50%]" />
    </template>
  </carousel>               
</template>

<script>
    import 'vue3-carousel/dist/carousel.css'
    import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

    export default {
        name: "Slides",
        components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,
    },
    }


</script>
<style scoped>

</style>



