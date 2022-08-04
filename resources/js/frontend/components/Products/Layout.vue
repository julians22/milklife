<template>
    <div>
        <div class="h-[270px] xl:h-[285px] 2xl:h-[396px] 3xl:h-[500px] mb-9">
            <image-wrapper :products="product_shows" :nav_selected="nav_selected"></image-wrapper>
        </div>
        <navigation :navigations="navigations" @clickedNav="navAct" v-if="nav_selected >= 0"></navigation>
    </div>
</template>

<script>
import Navigation from './ProductMenu.vue'
import ImageWrapper from './ImageWrapper.vue'

export default {
    props: [
        'products',
    ],
    components: {
        Navigation,
        ImageWrapper
    },
    data() {
        return {
            navigations: [],
            product_shows: [],
            nav_selected: null,
        };
    },
    mounted(){
        const self = this;
        self.products.forEach(product => {
            this.navigations.push({
                name: product.name,
                slug: product.slug,
                id: product.id,
            })
        });

        this.navAct(0);
        AOS.init();

    },
    methods: {
        navAct(id = 0){
            let products = [];
            const selfProducts = this.products;
            if (id > 0) {
                selfProducts.forEach(product => {
                    if (product.id == id) {
                        products = product.products;
                    }
                });
            }else{
                selfProducts.forEach(product => {
                    products = products.concat(product.products);
                });

                this.product_shows = _.orderBy(products, ['size'], ['desc']);
                this.nav_selected = 0;

                return;
            }

            this.product_shows = _.orderBy(products, ['size'], ['desc']);
            this.nav_selected = id;
        },
    },
}
</script>

<style>

</style>
