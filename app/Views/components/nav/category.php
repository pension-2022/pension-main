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
<li class="yamm-fw"><a href="<?= site_url(); ?>"><?= $c; ?></a>
    <ul class="dropdown-menu">
        <li>
            <div class="yamm-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <ul class="list list-mark-1 list-mark-1_mod-a">
                            <?= $this->include('components/category-list'); ?>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <article class="post post-4 post-4_mod-a clearfix">
                            <a href="<?= site_url(); ?>/article">
                                <div class="entry-media">
                                    <div alt="Foto" class="img-responsive"
                                        style="width: 360px; height: 280px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/assets/article-dummy-2.png);">
                                    </div>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title">DAPENBRI AWARD PERIODE 2021</h2>
                                    </div>
                                    <div class="entry-meta">
                                        <span class="entry-meta__item">
                                            38 mins ago
                                        </span>
                                        <?= $this->include('components/comment-count'); ?>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <article class="post post-3 post-3_mod-f clearfix">
                            <a href="<?= site_url(); ?>/article">
                                <div class="entry-media">
                                    <div alt="Foto" class="img-responsive"
                                        style="width: 100px; height: 80px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/assets/article-dummy-1.jpeg);">
                                    </div>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            MENGENAL SURAT PEMBERITAHUAN TAHUNAN (SPT) BAGI PENSIUNAN
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        <?= $this->include('components/comment-count'); ?>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <article class="post post-3 post-3_mod-f clearfix">
                            <a href="<?= site_url(); ?>/article">
                                <div class="entry-media">
                                    <div alt="Foto" class="img-responsive"
                                        style="width: 100px; height: 80px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/assets/article-dummy-2.png);">
                                    </div>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            DAPENBRI AWARD PERIODE 2021
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        <?= $this->include('components/comment-count'); ?>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <article class="post post-3 post-3_mod-f clearfix">
                            <a href="<?= site_url(); ?>/article">
                                <div class="entry-media">
                                    <div alt="Foto" class="img-responsive"
                                        style="width: 100px; height: 80px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/assets/article-dummy-3.jpg);">
                                    </div>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            PENINJAUAN KEMBALI UPAYA HUKUM UNTUK PERKARA YANG SUDAH INKRACHT
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        <?= $this->include('components/comment-count'); ?>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
<?php endforeach ?>