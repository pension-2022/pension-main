<?= $this->extend('layouts/auth'); ?>

<?= $this->section('root'); ?>
<?= $this->include('contents/authentication/sign-up'); ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url('assets/assets/js/custom/authentication/sign-up/general.js'); ?>"></script>
<?= $this->endSection(); ?>