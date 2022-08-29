<li>
    <a href="<?= site_url(); ?>">
        Menu
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="<?= site_url(); ?>">
                Beranda
            </a>
        </li>
        <li>
            <a>
                Kategori
            </a>
            <ul class="dropdown-menu">
                <?= $this->include('components/category-list'); ?>
            </ul>
        </li>
        <li>
            <a href="<?= site_url(); ?>/edit-profile">
                Ubah Profil
            </a>
        </li>
        <li>
            <a href="<?= site_url(); ?>/about">
                Tentang Kami
            </a>
        </li>
        <li>
            <a href="<?= site_url(); ?>/contact">
                Kontak
            </a>
        </li>
    </ul>
</li>