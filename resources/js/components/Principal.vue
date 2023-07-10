<template>
    <div>
        <head-component :logo="logo_src" alt="alt_ap" />
        <conteudo>

        </conteudo>
    </div>
</template>
<script>
import headComponent from './headcomponent/headComponent.vue';
import conteudo from './conteudo/conteudo.vue'
export default {
    components: {
        headComponent,
        conteudo
    },
    data() {
        return {
            logo_src: "./img/logo.png",
            alt_ap: "pfuxela"
        }
    },
}
</script>
<style scoped></style>

