<template>
    <div class="flex justify-between text-white font-koara-bold text-2xl">
        <div class="cursor-pointer" v-bind:class="{ 'text-milklife-blue-darken' : active_navigation == 0 }" @click="setActiveNavigation(0)">All Products</div>
        <div class="cursor-pointer" v-bind:class="{ 'text-milklife-blue-darken' : active_navigation == navigation.id }" @click="setActiveNavigation(navigation.id)" v-for="navigation in navigations" :key="`nav-${navigation.slug}`">{{ navigation.name }}</div>
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
