<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <style>
        .carousel {
            display: flex;
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
    </style>
</head>

<body>
    <div class="carousel">
        <div id="carouselContainer" class="carousel-container">
            <img class="carousel-item" src="/image1.jpg" alt="">
            <img class="carousel-item" src="/image2.jpg" alt="">
            <img class="carousel-item" src="/image3.jpg" alt="">
        </div>
    </div>
    <button id="prevBtn" style="font-size: 50px;">Prev</button>
    <button id="nextBtn" style="font-size: 50px;">Next</button>

    <script>
        const carouselContainer = document.getElementById("carouselContainer")
        const totalItems = document.querySelectorAll('.carousel-item').length
        let index = 0;
        let offset = 0;

        const nextBtn = document.getElementById("nextBtn");
        nextBtn.addEventListener("click", function() {
            index = index + 1;
            if (index >= totalItems) {
                index = 0;
            }
            offset = index * (-100);
            carouselContainer.style.transform = 'translateX(' + offset + '%)'
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
    </script>

</body>

</html>