import 'alpinejs'

window.$ = window.jQuery = require('jquery');
window.Swal = require('sweetalert2');

// CoreUI
require('@coreui/coreui');

// Boilerplate
require('../plugins');
require('../../vendor/tinymce/tynimce');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
