<template>
    <div>
        <div class="flex justify-around xl:justify-between mb-10 font-koara-bold text-2xl text-white">
            <div class="cursor-pointer" v-bind:class="{ 'text-milklife-orange' : active_navigation == 0 }" @click="setActiveNavigation(0)">All Products</div>
            <div class="cursor-pointer" v-bind:class="{ 'text-milklife-orange' : active_navigation == navigation.id }" @click="setActiveNavigation(navigation.id)" v-for="navigation in navigations" :key="`nav-${navigation.slug}`">{{ navigation.name }}</div>
        </div>
        <div class="copyright-wrapper mb-5">
            <h4 class="font-gotham-black text-center text-lg text-white">Copyright PT Global Dairi Alami 2022</h4>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'navigations',
    ],

    data(){
        return {
            active_navigation : 0
        }
    },

    methods: {
        setActiveNavigation(id){
            this.active_navigation = id;
            this.$emit('clickedNav', id);
        }
    }
}
</script>
