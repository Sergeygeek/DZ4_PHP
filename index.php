<?php
    // Представим, что мы получили этот массив из базы данных
    $images = [
        "img1" => [
            "alt" => "Картинка1",
            "src" => "images/min/1.jpg",
            "fullImgSrc" => "images/max/1.jpg",
       ],

        "img2" => [
            "alt" => "Картинка2",
            "src" => "images/min/2.jpg",
            "fullImgSrc" => "images/max/2.jpg",
        ],

        "img3" => [
            "alt" => "Картинка3",
            "src" => "images/min/3.jpg",
            "fullImgSrc" => "images/max/3.jpg",
        ],

        "img4" => [
            "alt" => "Картинка4",
            "src" => "images/min/4.jpg",
            "fullImgSrc" => "images/max/4.jpg",
        ],
    ];

    // Переведем массив в JSON
    $json = json_encode($images);

    // Запишем JSON в отдельный файл
    file_put_contents('data.json', $json);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Галерея</title>
  <style>
    .galleryWrapper__screen{
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #222;
      opacity: 0.8;
      position: fixed;
      top: 0;
      z-index: 100;
      display: block;
      text-align: center;
    }
    .galleryWrapper__image {
      max-height: 80%;
      max-width: 80%;
      z-index: 101;
      position: absolute;
      margin: auto;
      left: 0;
      top: 0;
      bottom: 0;
      right: 0;
    }
    .galleryWrapper__close {
      z-index: 101;
      position: absolute;
      top: 0;
      right: 0;
    }

    .galleryWrapperPrev {
      z-index: 102;
      position: absolute;
      top: 50%;
      left: 5%;
      transform: scale(4);
      cursor: pointer;
    }

    .galleryWrapperNext {
      z-index: 102;
      position: absolute;
      top: 50%;
      right: 5%;
      transform: scale(4);
      cursor: pointer;
    }

  </style>
</head>
<body>
  <div class="galleryPreviewsContainer">
    <!-- <img src="images/min/1.jpg" data-full_image_url="images/max/1.jpg" alt="Картинка1">
    <img src="images/min/2.jpg" data-full_image_url="images/max/2.jpg" alt="Картинка2">
    <img src="images/min/3.jpg" data-full_image_url="images/max/3.jpg" alt="Картинка3">
    <img src="images/min/4.jpg" data-full_image_url="images/max/4.jpg" alt="Картинка4"> -->
  </div>
  <button id="show-img">Show gallery</button>
  
  <!-- <div class="galleryWrapper">
    <div class="galleryWrapperPrev">&#8249;</div>
    <div class="galleryWrapperNext">&#8250;</div>
    <div class="galleryWrapper__screen"></div>
    <img class="galleryWrapper__close" src="images/gallery/close.png" alt="">
    <img class="galleryWrapper__image" src="images/max/1.jpg" alt="">
  </div> -->
  <script src="db.js"></script>
  <script src="js.js"></script>
  
</body>
</html>