require('./bootstrap');

require('alpinejs');

window.contextMenu = require('jquery-contextmenu/dist/jquery.contextMenu');

import pdfMake from 'pdfmake';
import pdfFonts from 'pdfmake/build/vfs_fonts';
pdfMake.vfs = pdfFonts.pdfMake.vfs;

import dt from 'datatables.net-bs4';
require('datatables.net-autofill-bs4');
require('datatables.net-buttons/js/buttons.colVis.js');
require('datatables.net-buttons/js/buttons.html5.js');
require('datatables.net-buttons/js/buttons.print.js');
require('datatables.net-fixedheader-bs4');
require('datatables.net-keytable-bs4');
require('datatables.net-responsive-bs4');
require('datatables.net-rowreorder-bs4');
require('datatables.net-scroller-bs4');
require('datatables.net-searchbuilder-bs4');
require('datatables.net-searchpanes-bs4');
require('datatables.net-select-bs4');

console.log('qwe')
// import contextMenu from 'jquery-contextmenu/dist/jquery.contextMenu';
// window.fa = require("fontawesome");
// import fa from '@fortawesome/fontawesome-free/js/brands';
// window.fa = require('@fortawesome/fontawesome-free/js/all');
