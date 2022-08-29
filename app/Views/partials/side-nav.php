<nav id="cd-nav" class="cd-nav-container"><a href="#0" class="cd-close-nav">Close</a>
    <nav class="sidebar-nav">
        <ul class="sidebar-nav__list list-unstyled">
            <?= $this->include('components/side-nav/main'); ?>
            <?= $this->include('components/side-nav/category'); ?>
            <?php if ($priv == 1) : ?>
            logout
            <?php endif ?>
        </ul>
    </nav>
</nav>