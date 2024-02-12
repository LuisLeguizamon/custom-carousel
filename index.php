<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <style>
        .carousel {
            display: flex;
            position: relative;
            overflow: hidden;
            width: 500px;
            height: 300px;
            margin: auto;
        }

        .carousel-container {
            display: flex;
        }

        .carousel-item {
            min-width: 100%;
            box-sizing: border-box;
        }

        .carousel-buttons {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            width: 100%;
            justify-content: space-between;
        }

        #prevBtn,
        #nextBtn {
            font-size: 20px;
            background-color: transparent;
            color: white;
            border: none;
            cursor: pointer;
        }

        #prevBtn:hover,
        #nextBtn:hover{
            color: lightgray;
            transition: color 0.3s ease-in-out;
        }
    </style>
</head>

<body>
    <?php
        $autoSlide = true;
    ?>
    <div class="carousel">
        <div id="carouselContainer" class="carousel-container">
            <img class="carousel-item" src="/image1.jpg" alt="">
            <img class="carousel-item" src="/image2.jpg" alt="">
            <img class="carousel-item" src="/image3.jpg" alt="">
        </div>
        <div class="carousel-buttons">
            <button id="prevBtn">
                <svg class="preicon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left">
                    <path d="m15 18-6-6 6-6" />
                </svg>
            </button>
            <button id="nextBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </button>
        </div>
    </div>

    <script>
        const carouselContainer = document.getElementById("carouselContainer")
        const totalItems = document.querySelectorAll('.carousel-item').length
        let index = 0;
        let offset = 0;

        const nextBtn = document.getElementById("nextBtn");
        nextBtn.addEventListener("click", function() {
            nextSlide();
        })

        const prevBtn = document.getElementById("prevBtn");
        prevBtn.addEventListener("click", function() {
            index = index - 1;
            if (index < 0) {
                index = totalItems - 1;
            }
            offset = index * (-100);
            carouselContainer.style.transform = 'translateX(' + offset + '%)'
        })

        function nextSlide()
        {
            index = index + 1;
            if (index >= totalItems) {
                index = 0;
            }
            offset = index * (-100);
            carouselContainer.style.transform = 'translateX(' + offset + '%)'
        }

        <?php
            if ($autoSlide) {
                echo("setInterval(nextSlide, 3000)");
            }
        ?>
    </script>

</body>

</html>