import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import '/public/AdminLTE-3.2.0/plugins/jquery/jquery.min.js';
import '/public/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js';
import '/public/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js';
import '/public/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js';
import '/public/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js';
import '/public/AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js';
import '/public/AdminLTE-3.2.0/dist/js/adminlte.js';

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);
