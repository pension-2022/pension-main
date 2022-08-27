<?php $categoryx = [
    'Kesehatan',
    'Teknologi',
    'Politik',
    'Hiburan',
    'Gaya Hidup',
    'Olahraga',
    'Wisata'
] ?>
<?php foreach ($category as $c) : ?>
<li><a href="<?= site_url().'/category/'.$c['id']; ?>"><?= $c['deskripsi']; ?></a></li>
<?php endforeach ?>