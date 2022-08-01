import 'alpinejs'
import { Fancybox } from "@fancyapps/ui";

window.$ = window.jQuery = require('jquery');
window.Swal = require('sweetalert2');
// window.lfm = require('./lfm');

Fancybox.bind(".image-promotion", {
    Image: {
      zoom: false,
    },
});

// livewire sortable
require('livewire-sortable')

// CoreUI
require('@coreui/coreui');

// Boilerplate
require('../plugins');
require('../../vendor/tinymce/tynimce');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue';

Vue.component('product-excelenece-component', require('./components/Products/ProductExcelenceComponent.vue').default);
Vue.component('product-compotition-component', require('./components/Products/ProductCompotitionComponent.vue').default);

const app = new Vue({
    el: '#app',
});
