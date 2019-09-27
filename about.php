<?php include "./templates/header.php"?>
<title>A little about Us!</title>
<link rel="stylesheet" href="./assets/stylesheets/common.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
<link rel="stylesheet" href="./assets/stylesheets/about.css">
<script src="./assets/scripts/about.js"></script>
</head>
<body>
<?php include "./templates/nav.php"?>

<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <img src="./assets/images/trek.jpg" alt="https://unsplash.com/@randomlies" class="img-fluid">
            <a href="https://unsplash.com/@randomlies " class="text-white">https://unsplash.com/@randomlies</a>
        </div>
        <div class="swiper-slide">
            <img src="./assets/images/yoga.jpg" alt="https://unsplash.com/@randomlies" class="img-fluid">
            <a href="https://unsplash.com/@randomlies " class="text-white">https://unsplash.com/@randomlies</a>
        </div>
        <div class="swiper-slide">
            <img src="./assets/images/raft.jpg" alt="https://unsplash.com/@randomlies" class="img-fluid">
            <a href="https://unsplash.com/@randomlies " class="text-white">https://unsplash.com/@randomlies</a>
        </div>
        <div class="swiper-slide">
            <img src="./assets/images/gym.jpg" alt="https://unsplash.com/@randomlies" class="img-fluid">
            <a href="https://unsplash.com/@randomlies " class="text-white">https://unsplash.com/@randomlies</a>
        </div>
        <div class="swiper-slide">
            <img src="./assets/images/familia.jpg" alt="https://unsplash.com/@randomlies" class="img-fluid">
            <a href="https://unsplash.com/@randomlies " class="text-white">https://unsplash.com/@randomlies</a>
        </div>
        <div class="swiper-slide">
            <img src="./assets/images/glide.jpg" alt="https://unsplash.com/@randomlies" class="img-fluid">
            <a href="https://unsplash.com/@randomlies " class="text-white">https://unsplash.com/@randomlies</a>
        </div>
        ......
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@5.0.3/js/swiper.min.js" ></script>

</body>
</html>