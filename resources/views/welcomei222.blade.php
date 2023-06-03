<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Innosapiens | Cursos</title>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/main2.css"> 
</head>
<body>


    <section class="section" id="testimonials">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
                                <div class="card swiper-slide">
                                    <img src="../assets/images/unsplash.jpg" alt="" class="card-img">
                                    <div class="card-content">
                                        <h2 class="name" style="user-select: none;">Curso 1</h2>
                                        <p class="description" style="user-select: none;">The lorem text the section
                                            that contains header with having open functionality. Lorem dolor sit amet
                                            consectetur adipisicing elit.</p>

                                        <button class="button">View More</button>
                                    </div>
                                </div>

                                <div class="card swiper-slide">
                                    <img src="../assets/images/unsplash8.jpg" alt="" class="card-img">

                                    <div class="card-content">
                                        <h2 class="name" style="user-select: none;">curso 2</h2>
                                        <p class="description" style="user-select: none;">The lorem text the section
                                            that contains header with having open functionality. Lorem dolor sit amet
                                            consectetur adipisicing elit.</p>

                                        <button class="button">View More</button>
                                    </div>
                                </div>

                                <div class="card swiper-slide">
                                    <img src="../assets/images/unsplash1.jpg" alt="" class="card-img">


                                    <div class="card-content">
                                        <h2 class="name" style="user-select: none;">curso 3</h2>
                                        <p class="description" style="user-select: none;">The lorem text the section
                                            that contains header with having open functionality. Lorem dolor sit amet
                                            consectetur adipisicing elit.</p>

                                        <button class="button">View More</button>
                                    </div>
                                </div>
                                <div class="card swiper-slide">
                                    <img src="../assets/images/unsplash2.jpg" alt="" class="card-img">


                                    <div class="card-content">
                                        <h2 class="name" style="user-select: none;">curso 4</h2>
                                        <p class="description" style="user-select: none;">The lorem text the section
                                            that contains header with having open functionality. Lorem dolor sit amet
                                            consectetur adipisicing elit.</p>

                                        <button class="button" style="user-select: none;">View More</button>
                                    </div>
                                </div>
                                <div class="card swiper-slide">
                                    <img src="../assets/images/unsplash3.jpg" alt="" class="card-img">


                                    <div class="card-content">
                                        <h2 class="name" style="user-select: none;">curso 5</h2>
                                        <p class="description" style="user-select: none;">The lorem text the section
                                            that contains header with having open functionality. Lorem dolor sit amet
                                            consectetur adipisicing elit.</p>

                                        <button class="button">View More</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
    </section>

</body>
</html>

<script>
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: false,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
          /*   1250: {
                slidesPerView: 4,
            }, */
        },
    });
</script>
<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    .slide-container {
        max-width: 1120px;
        width: 100%;
        padding: 40px 0;
    }

    .slide-content {
        margin: 0 40px;
        overflow: hidden;
        border-radius: 25px;
    }

    .card {
        border-radius: 25px;
        background-color: #FFF;
    }

    .image-content,
    .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px 14px;
    }

    .image-content {
        position: relative;
        row-gap: 5px;
        padding: 25px 0;
    }

    .overlay {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;

        border-radius: 25px 25px 0 0px;
    }

    .overlay::before,
    .overlay::after {
        content: '';
        position: absolute;
        right: 0;
        bottom: -40px;
        height: 40px;
        width: 40px;
    }

    .overlay::after {
        border-radius: 0 25px 0 0;
        background-color: #FFF;
    }

    .card-image {
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        background: #FFF;
        padding: 3px;
    }

    .card-image .card-img {
        height: 100%;
        width: 100%;
        object-fit: contain;
        border-radius: 25px 25px 0 0 !important;
        border: 4px solid #FF9015;
    }

    .name {
        font-size: 18px;
        font-weight: 500;
        color: #333;
    }

    .description {
        font-size: 14px;
        color: #707070;
        text-align: center;
    }

    .button {
        border: none;
        font-size: 16px;
        color: #FFF;
        padding: 8px 16px;
        background-color: #FF9015;
        border-radius: 6px;
        margin: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .button:hover {
        background: #265DF2;
    }

    .swiper-navBtn {
        color: #FF9015;
        transition: color 0.3s ease;
    }

    .swiper-navBtn:hover {
        color: #FF9015;
    }

    .swiper-navBtn::before,
    .swiper-navBtn::after {
        font-size: 35px;
    }

    .swiper-button-next {
        right: 0;
    }

    .swiper-button-prev {
        left: 0;
    }

    .swiper-pagination-bullet {
        background-color: #FF9015;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #FF9015;
    }

    @media screen and (max-width: 768px) {
        .slide-content {
            margin: 0 10px;
        }

        .swiper-navBtn {
            display: none;
        }
    }
</style>
