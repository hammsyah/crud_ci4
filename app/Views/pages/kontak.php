<?= $this->extend('/layout/template'); ?>

<?= $this->section('isikonten'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Kontak ku</h2>
            <?php d($alamat); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>