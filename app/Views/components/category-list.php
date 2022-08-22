<?php $category = [
    'Kesehatan',
    'Teknologi',
    'Politik',
    'Hiburan',
    'Gaya Hidup',
    'Olahraga',
    'Wisata'
] ?>
<?php foreach ($category as $c) : ?>
<li><a href="<?= site_url(); ?>/category"><?= $c; ?></a></li>
<?php endforeach ?>