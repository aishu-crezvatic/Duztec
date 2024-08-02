<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- header end  -->

<?php
$mediaItems  = [
    'https://picsum.photos/seed/picsum/200/300',
    'https://dummyimage.com/600x400/000/fff',
    'https://dummyimage.com/300x500/09f/fff',
    'https://dummyimage.com/600x300/09f/fff',
    'https://dummyimage.com/200x200/09f/fff',
    'https://dummyimage.com/300x600/09f/fff',
    'https://dummyimage.com/300x200/09f/fff',
    'https://picsum.photos/seed/picsum/200/300',
    'https://dummyimage.com/600x400/000/fff',
    'https://dummyimage.com/400x600/09f/fff',
    'https://dummyimage.com/300x500/09f/fff',
    'https://dummyimage.com/500x300/000/fff',
    'https://dummyimage.com/200x200/09f/fff',
    'https://dummyimage.com/600x300/09f/fff',
    'https://dummyimage.com/300x600/09f/fff',
];
?>

<h1 class="my-5 about-title">Gallery</h1>
  <div class="grid">
    <?php foreach ($mediaItems as $item): ?>
        <div class="grid-item">
            <div class="card">
                <?php if (strpos($item, '.mp4') !== false): ?>
                    <video controls>
                        <source src="<?php echo $item; ?>" type="video/mp4">
                    </video>
                <?php else: ?>
                    <img src="<?php echo $item; ?>" alt="Gallery Image">
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
  </div>





<!-- ============================================================== -->
<!-- Start - Brand- Section -->
<!-- ============================================================= -->
<div class="brand-section">
    <div class="container">
        <div class="row brand-bg">
            <div class="brand_list owl-carousel">
                <div class="brand-thumb">
                    <img src="assets/images/item_01.png" alt="">
                </div>
                <div class="brand-thumb">
                    <img src="assets/images/item_02.png" alt="">
                </div>
                <div class="brand-thumb">
                    <img src="assets/images/item_03.png" alt="">
                </div>
                <div class="brand-thumb">
                    <img src="assets/images/item_04.png" alt="">
                </div>
                <div class="brand-thumb">
                    <img src="assets/images/item_01.png" alt="">
                </div>
                <div class="brand-thumb">
                    <img src="assets/images/item_02.png" alt="">
                </div>
                <div class="brand-thumb">
                    <img src="assets/images/item_03.png" alt="">
                </div>
                <div class="brand-thumb">
                    <img src="assets/images/item_04.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- Footer end  -->