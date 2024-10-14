<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- header end  -->

<?php

// Complete video data array
$videos = [
    [
        'title' => 'Slag Management System',
        'url' => 'https://youtu.be/HAIP1RNg4zA',
        'thumbnail' => 'https://img.youtube.com/vi/HAIP1RNg4zA/0.jpg',
    ],
    [
        'title' => 'Road Washing System',
        'url' => 'https://youtu.be/x4SmLxxH5gc',
        'thumbnail' => 'https://img.youtube.com/vi/x4SmLxxH5gc/0.jpg',
    ],
    [
        'title' => 'Mist Beam – 100',
        'url' => 'https://youtu.be/XQM0XZt7OBw',
        'thumbnail' => 'https://img.youtube.com/vi/XQM0XZt7OBw/0.jpg',
    ],
    [
        'title' => 'Single Fluid Dust Suppression System',
        'url' => 'https://youtu.be/6o0LQTchFro',
        'thumbnail' => 'https://img.youtube.com/vi/6o0LQTchFro/0.jpg',
    ],
    [
        'title' => 'High Pressure Dust Suppression System',
        'url' => 'https://youtu.be/BgESfHu8qgI',
        'thumbnail' => 'https://img.youtube.com/vi/BgESfHu8qgI/0.jpg',
    ],
    [
        'title' => 'Odour Control System',
        'url' => 'https://youtu.be/O0UePG9okMs',
        'thumbnail' => 'https://img.youtube.com/vi/O0UePG9okMs/0.jpg',
    ],
    [
        'title' => 'Mosquito MHP4',
        'url' => 'https://youtu.be/a66-dVRQ09o',
        'thumbnail' => 'https://img.youtube.com/vi/a66-dVRQ09o/0.jpg',
    ],
    [
        'title' => 'Mist Beam - 50 (First)',
        'url' => 'https://youtu.be/20Eukhx3PxE',
        'thumbnail' => 'https://img.youtube.com/vi/20Eukhx3PxE/0.jpg',
    ],
    [
        'title' => 'Mist Beam - 50 (Second)',
        'url' => 'https://youtu.be/NjBihK8iXqw',
        'thumbnail' => 'https://img.youtube.com/vi/NjBihK8iXqw/0.jpg',
    ],
    [
        'title' => 'Mosquito Mini M5',
        'url' => 'https://youtu.be/U_PdqvuwBA4',
        'thumbnail' => 'https://img.youtube.com/vi/U_PdqvuwBA4/0.jpg',
    ],
    [
        'title' => 'Fog Curtain',
        'url' => 'https://youtu.be/8-sLpZWz6Ro',
        'thumbnail' => 'https://img.youtube.com/vi/8-sLpZWz6Ro/0.jpg',
    ],
    [
        'title' => 'Cooling and Humidification System (Full)',
        'url' => 'https://youtu.be/tYTF2GI3n-o',
        'thumbnail' => 'https://img.youtube.com/vi/tYTF2GI3n-o/0.jpg',
    ],
    [
        'title' => 'Cooling and Humidification System (Short)',
        'url' => 'https://www.youtube.com/shorts/CRjb4SPWFoQ',
        'thumbnail' => 'https://img.youtube.com/vi/CRjb4SPWFoQ/0.jpg',
    ],
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
<div class="container">
    <div class="row">
        <?php foreach ($videos as $video): ?>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card bg-transparent border-0">
                    <a href="<?php echo htmlspecialchars($video['url']); ?>" target="_blank">
                        <img src="<?php echo htmlspecialchars($video['thumbnail']); ?>" alt="<?php echo htmlspecialchars($video['title']); ?>" class="img-fluid" />
                    </a>
                    <h5 class="text-center mt-2"><?php echo htmlspecialchars($video['title']); ?></h5>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Footer start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- Footer end  -->
