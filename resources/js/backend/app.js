import 'alpinejs'

window.$ = window.jQuery = require('jquery');
window.Swal = require('sweetalert2');
// window.lfm = require('./lfm');

// CoreUI
require('@coreui/coreui');

// Boilerplate
require('../plugins');
require('../../vendor/tinymce/tynimce');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
