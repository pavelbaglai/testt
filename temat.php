<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .slider-container {
      width: 90vw;
      height: 90vw;
      max-width: 95vh;
      max-height: 70vh;
      aspect-ratio: 1/1;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.10);
      overflow: hidden;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      align-items: stretch;
      transition: width 0.3s, height 0.3s;
      margin: 0 0 0 345px;
    }
    .slide {
      position: absolute;
      inset: 0;
      display: none;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 100%;
      animation: fadeIn 0.6s;
      z-index: 2;
    }
    .slide.active {
      display: flex;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(40px);}
      to   { opacity: 1; transform: translateY(0);}
    }
    .slide-title {
      position: absolute;
      top: 18px;
      left: 0; right: 0;
      z-index: 3;
      font-size: 1.1rem;
      font-weight: bold;
      color: #fff;
      text-align: center;
      text-shadow: 0 2px 20px #000,0 1px 5px #000;
      pointer-events: none;
      user-select: none;
    }
    .slide-media-bg {
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      width: 100%; height: 100%;
      z-index: 1;
      overflow: hidden;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .slide-img {
      width: 100vw;
      height: 100vh;
      min-width: 100%;
      min-height: 100%;
      object-fit: contain;
      object-position: center;
      background: #fff;
      display: block;
      pointer-events: none;
      user-select: none;
    }
    .slide-video {
      width: 100vw;
      height: 100vh;
      min-width: 100%;
      min-height: 100%;
      object-fit: contain;
      object-position: center;
      display: block;
    }
    .slide-controls {
      position: absolute;
      bottom: 18px;
      left: 0; right: 0;
      z-index: 10;
      display: flex;
      justify-content: center;
      gap: 8px;
      pointer-events: auto;
    }
    .slide-btn, .fullscreen-btn {
      font-size: 1rem;
      padding: 10px 18px;
      border: none;
      border-radius: 10px;
      background: #487eb0cc;
      color: #fff;
      cursor: pointer;
      transition: background 0.2s;
      box-shadow: 0 2px 8px rgba(70,120,176,0.08);
      backdrop-filter: blur(4px);
      outline: none;
      opacity: 0.95;
    }
    .slide-btn:active, .fullscreen-btn:active {
      background: #273c75cc;
    }
    .fullscreen-btn {
      position: absolute;
      top: 18px;
      right: 18px;
      z-index: 20;
      padding: 8px 12px;
      font-size: 1.2em;
      border-radius: 8px;
      background: #487eb0cc;
      color: #fff;
      opacity: 0.8;
    }
    .close-fullscreen-btn {
      position: absolute;
      top: 18px;
      left: 18px;
      z-index: 30;
      padding: 8px 14px;
      font-size: 1.2em;
      border-radius: 8px;
      background: #c23616cc;
      color: #fff;
      opacity: 0.92;
      display: none;
    }
    .close-fullscreen-btn.visible {
      display: block;
    }
    .fullscreen-btn:active {
      background: #273c75cc;
    }
    .slide-indicator {
      position: absolute;
      bottom: 62px;
      left: 0; right: 0;
      display: flex;
      justify-content: center;
      gap: 8px;
      z-index: 11;
      pointer-events: none;
    }
    .dot {
      width: 10px;
      height: 10px;
      background: #dcdde1cc;
      border-radius: 50%;
      transition: background 0.2s;
    }
    .dot.active {
      background: #487eb0cc;
    }
    @media (max-width: 600px), (max-height: 600px) {
  .slider-container {
    width: 100vw;
    height: 100vw;
    max-width: 95vh;
    max-height: 75vh;
  }
}
@media (max-width: 400px), (max-height: 400px) {
  .slider-container {
    border-radius: 0;
  }
}
  </style>
</head>
<body>
  <div class="slider-container" id="slider">
    <!-- СЛАЙД 1: JPG -->
    <div class="slide active">
      <div class="slide-title">Слайд 1</div>
      <div class="slide-media-bg">
        <img src="ed/upload-files/2025/tema/1.jpg" alt="Слайд 1" class="slide-img">
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="nextSlide()">Далее</button>
      </div>
    </div>
    <!-- СЛАЙД 2: MP4 -->
    <div class="slide">
      <div class="slide-title">Слайд 2</div>
      <div class="slide-media-bg">
        <video src="ed/upload-files/2025/tema/med.mp4" class="slide-video" controls autoplay muted playsinline loop></video>
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="prevSlide()">Назад</button>
        <button class="slide-btn" onclick="nextSlide()">Далее</button>
      </div>
    </div>
    <!-- СЛАЙД 3: JPG -->
    <div class="slide">
      <div class="slide-title">Слайд 3</div>
      <div class="slide-media-bg">
        <img src="ed/upload-files/2025/tema/3.jpg" alt="Слайд 3" class="slide-img">
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="prevSlide()">Назад</button>
        <button class="slide-btn" onclick="nextSlide()">Далее</button>
      </div>
    </div>
    <!-- СЛАЙД 4: JPG -->
    <div class="slide">
      <div class="slide-title">Слайд 4</div>
      <div class="slide-media-bg">
        <img src="ed/upload-files/2025/tema/4.jpg" alt="Слайд 4" class="slide-img">
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="prevSlide()">Назад</button>
        <button class="slide-btn" onclick="nextSlide()">Далее</button>
      </div>
    </div>
    <!-- СЛАЙД 5: JPG -->
    <div class="slide">
      <div class="slide-title">Слайд 5</div>
      <div class="slide-media-bg">
        <img src="ed/upload-files/2025/tema/5.jpg" alt="Слайд 5" class="slide-img">
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="prevSlide()">Назад</button>
        <button class="slide-btn" onclick="nextSlide()">Далее</button>
      </div>
    </div>
    <!-- СЛАЙД 6: JPG -->
    <div class="slide">
      <div class="slide-title">Слайд 6</div>
      <div class="slide-media-bg">
        <img src="ed/upload-files/2025/tema/6.jpg" alt="Слайд 6" class="slide-img">
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="prevSlide()">Назад</button>
        <button class="slide-btn" onclick="nextSlide()">Далее</button>
      </div>
    </div>
    <!-- СЛАЙД 7: JPG -->
    <div class="slide">
      <div class="slide-title">Слайд 7</div>
      <div class="slide-media-bg">
        <img src="ed/upload-files/2025/tema/7.jpg" alt="Слайд 7" class="slide-img">
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="prevSlide()">Назад</button>
        <button class="slide-btn" onclick="nextSlide()">Далее</button>
      </div>
    </div>
    <!-- СЛАЙД 8: JPG -->
    <div class="slide">
      <div class="slide-title">Слайд 8</div>
      <div class="slide-media-bg">
        <img src="ed/upload-files/2025/tema/8.jpg" alt="Слайд 8" class="slide-img">
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="prevSlide()">Назад</button>
        <button class="slide-btn" onclick="nextSlide()">Далее</button>
      </div>
    </div>
    <!-- СЛАЙД 9: JPG -->
    <div class="slide">
      <div class="slide-title">Слайд 9</div>
      <div class="slide-media-bg">
        <img src="ed/upload-files/2025/tema/9.jpg" alt="Слайд 9" class="slide-img">
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="prevSlide()">Назад</button>
        <button class="slide-btn" onclick="nextSlide()">Далее</button>
      </div>
    </div>
    <!-- СЛАЙД 10: JPG -->
    <div class="slide">
      <div class="slide-title">Слайд 10</div>
      <div class="slide-media-bg">
        <img src="ed/upload-files/2025/tema/10.jpg" alt="Слайд 10" class="slide-img">
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="prevSlide()">Назад</button>
        <button class="slide-btn" onclick="nextSlide()">Далее</button>
      </div>
    </div>
    <!-- СЛАЙД 11: JPG -->
    <div class="slide">
      <div class="slide-title">Слайд 11</div>
      <div class="slide-media-bg">
        <img src="ed/upload-files/2025/tema/11.jpg" alt="Слайд 11" class="slide-img">
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="prevSlide()">Назад</button>
        <button class="slide-btn" onclick="nextSlide()">Далее</button>
      </div>
    </div>
    <!-- СЛАЙД 12: JPG -->
    <div class="slide">
      <div class="slide-title">Слайд 12</div>
      <div class="slide-media-bg">
        <img src="ed/upload-files/2025/tema/12.jpg" alt="Слайд 12" class="slide-img">
      </div>
      <button class="fullscreen-btn" onclick="openFullscreen(this)">полный экран</button>
      <div class="slide-controls">
        <button class="slide-btn" onclick="prevSlide()">Назад</button>
      </div>
    </div>
    <button class="close-fullscreen-btn" id="closeFullscreenBtn" onclick="closeFullscreen()" title="Выйти из полноэкранного режима">X</button>
    <!-- Индикаторы -->
    <div class="slide-indicator">
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </div>
</br></br>

  <script>
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    let current = 0;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
        if (dots[i]) dots[i].classList.toggle('active', i === index);
        // Автовидео
        const video = slide.querySelector('video');
        if (video) {
          if (i === index) {
            video.currentTime = 0;
            video.play();
          } else {
            video.pause();
            video.currentTime = 0;
          }
        }
      });
      current = index;
    }

    function nextSlide() {
      let next = current + 1;
      if (next >= slides.length) next = 0;
      showSlide(next);
    }

    function prevSlide() {
      let prev = current - 1;
      if (prev < 0) prev = slides.length - 1;
      showSlide(prev);
    }

    // Клавиши влево/вправо для навигации
    document.addEventListener('keydown', function(e) {
      if (e.key === 'ArrowRight') nextSlide();
      if (e.key === 'ArrowLeft') prevSlide();
    });

    // Fullscreen API
    function openFullscreen(btn) {
      const slider = document.getElementById('slider');
      if (slider.requestFullscreen) {
        slider.requestFullscreen();
      } else if (slider.webkitRequestFullscreen) {
        slider.webkitRequestFullscreen();
      } else if (slider.msRequestFullscreen) {
        slider.msRequestFullscreen();
      }
    }
    function closeFullscreen() {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      }
    }

    // Показ/скрытие кнопки "Закрыть полноэкранный"
    function updateCloseBtn() {
      const btn = document.getElementById('closeFullscreenBtn');
      if (
        document.fullscreenElement ||
        document.webkitFullscreenElement ||
        document.msFullscreenElement
      ) {
        btn.classList.add('visible');
      } else {
        btn.classList.remove('visible');
      }
    }

    // Автовыход из fullcreen: по ESC
    document.addEventListener('fullscreenchange', updateCloseBtn);
    document.addEventListener('webkitfullscreenchange', updateCloseBtn);
    document.addEventListener('msfullscreenchange', updateCloseBtn);
    document.addEventListener('mozfullscreenchange', updateCloseBtn);

    updateCloseBtn();
  </script>
</body>
</html>

