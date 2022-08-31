<?php foreach ($carousel as $item) : ?>
<!-- Slide 1-->
<div class="sp-slide"><img src="<?= base_url(); ?>/uploads/photos/<?= $item['photo']; ?>" alt="slider"
        class="sp-image" />
    <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800"
        data-show-delay="400" data-hide-delay="400" class="sp-layer">
        <h2 class="main-slider__title" style="padding: 0 20%;"><?= $item['judul']; ?></h2>
    </div>
    <div data-width="100%" data-show-transition="up" data-hide-transition="left" data-show-duration="800"
        data-show-delay="1700" data-hide-delay="400" class="sp-layer"><a
            href="<?= site_url(); ?>/article/<?= strtolower($item['judul']); ?>"
            class="main-slider__link bg-1 btn btn-xs btn-effect"><?= $item['kategori']; ?></a>
    </div>
    <div data-width="100%" data-show-transition="right" data-hide-transition="left" data-show-duration="800"
        data-show-delay="1200" data-hide-delay="400" class="sp-layer">
        <div class="main-slider-meta"><span class="main-slider-meta__item"><?= $item['tanggal']; ?></span>
            <span class="main-slider-meta__item"><i class="icon pe-7s-comment"></i><?= $item['jumlahkomen']; ?></span>
        </div>
    </div>
</div>
<?php endforeach ?>