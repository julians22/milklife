<template>
    <div class="flex justify-center h-full" v-show="sorted_products.length > 0">
        <div v-for="(product, index) in sorted_products" :key="product.id" class="flex flex-col justify-end">
            <!-- <div @mouseover="hoverProduct(index)" @mouseout="hoverProduct(-1)" data-aos="fade-right" data-aos-easing="ease-out-cubic" :data-aos-duration="500" :data-aos-delay="150 + (2 * index)"> -->
            <div @mouseover="hoverProduct(index)" @mouseout="hoverProduct(-1)" @click="showProduct(product)" class="shadow-2xl">
                <div class="product-wrapper">
                    <img :src="product.image" alt="" :ref="`product-image-${product.id}`" class="product-image" :class="[{'selected': isSelected(index)}, getImageWidth(product.size)]" v-tooltip.bottom-start="tooltipContent(product)">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'products',
        'nav_selected',
    ],

    data(){
        return {
            sorted_products: [],
            selectedIdx: -1,
        }
    },

    watch: {
        nav_selected(new_val){
            if (new_val > 0) {
                //sort by products.size
                    this.sorted_products = _.orderBy(this.products, 'size', 'desc');
                }else{
                    setTimeout(() => {
                        this.sorted_products = this.products;
                    }, 400)
                }
        },
    },

    methods: {
        //image width by product size
        getImageWidth(size){
            if (size >= 1000) {
                // return {
                //     width: '100px',
                // };
                return 'product-image-large';
            }else if (size >= 200) {
                // return {
                //     width: '88px',
                // };
                return 'product-image-medium';
            }else if (size >= 125) {
                // return {
                    //     width: '85px',
                // };
                return 'product-image-small';
            }
            return 'product-image-large';
        },

        hoverProduct(idx){
            this.selectedIdx = idx;
        },

        isSelected(idx){
            return this.selectedIdx == idx;
        },

        tooltipContent(product){
            return {
                'content': product.name,
                'theme': 'tooltip-product',
                'skidding': 30,
                'distance': -20,
            };
        },

        showProduct(product){
            const slug = product.slug;
            const url = `/product/${slug}`;
            window.location.href = url;
        },
    },

}
</script>

<style scoped>
    .fade-enter-active,
    .fade-leave-active {
       transition: opacity .5s;
    }
    .fade-enter,
    .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }

    .product-image{
        transition: all .2s ease-in;
        cursor: pointer;
        z-index: 20;
        position: relative;
    }

    .product-image.selected{
        transform: scale(1.2) translate(0, -20px);
        z-index: 30 !important;
    }

    .product-wrapper{
        position: relative;
        z-index: 30;
    }


</style>
