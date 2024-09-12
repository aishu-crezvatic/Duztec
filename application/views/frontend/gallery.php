<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- header end  -->

<?php

// print_r($images);
$mediaItems = [
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

<style>
    .card {
        background-color: transparent !important;
        border: none !important;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
</style>

<h1 class="my-5 about-title text-center">Gallery</h1>
<div class="grid">
    <?php foreach ($images as $item): ?>
        <?php if ($item['is_video'] == 1): // Check if the item is a video ?>
            <div class="grid-item rounded p-3 ">
                <div class="card bg-transparent border-0 ">
                    <!-- Video element -->
                    <video controls muted width="100%" aria-label="Video content">
                        <source src="<?php echo htmlspecialchars('uploads/gallery/' . $item['img_video']); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>




<!-- Footer start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- Footer end  -->