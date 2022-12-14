<?= $this->extend('layouts/main'); ?>

<?= $this->section('root'); ?>
<?= $this->include('contents/home'); ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url(); ?>/assets/js/main.js"></script>
<script src="<?= base_url(); ?>/assets/js/separate-js/custom.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/3d-bold-navigation/main.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/slider-pro/jquery.sliderPro.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/prettyphoto/jquery.prettyPhoto.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/bootstrap-select/bootstrap-select.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/doubletaptogo.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/waypoints.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/news-ticker/js/endlessRiver.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datetimepicker/jquery.datetimepicker.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/flexslider/jquery.flexslider.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/jarallax/jarallax.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/scrollreveal/scrollreveal.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/classie.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/switcher/js/dmss.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script> -->
<?= $this->endSection(); ?>