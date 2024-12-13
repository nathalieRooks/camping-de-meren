<html>
<script src="carrousel.js"></script>
<body>
   <main class="carrousel">
      <!-- Slideshow div -->
      <div class="slideshow-container">

         <!-- Slides -->
         <!-- slide 1 -->
         <div class="mySlides">
            <div class="numbertext">1/10</div>
            <img src="./media/caravan-binnenkant.jpg" alt="caravan binnen" style="width: 100%;">
         </div>

         <!-- slide 2 -->
         <div class="mySlides">
            <div class="numbertext">2/10</div>
            <img src="./media/caravan-buitenkant.jpg" alt="caravan buiten" style="width: 100%;">
         </div>

         <!-- slide 3 -->
         <div class="mySlides">
            <div class="numbertext">3/10</div>
            <img src="./media/caravan.png" alt="caravan" style="width: 100%;">
         </div>

         <!-- slide 4 -->
         <div class="mySlides">
            <div class="numbertext">4/10</div>
            <img src="./media/Terrein-1.jpg" alt="foto terrein" style="width: 100%;">
         </div>

         <!-- slide 5 -->
         <div class="mySlides">
            <div class="numbertext">5/10</div>
            <img src="./media/water-1.jpg" alt="Water" style="width: 100%;">
         </div>

         <!-- slide 6 -->
         <div class="mySlides">
            <div class="numbertext">6/10</div>
            <img src="./media/water-2.jpg" alt="Water" style="width: 100%;">
         </div>

         <!-- slide 7 -->
         <div class="mySlides">
            <div class="numbertext">7/10</div>
            <img src="./media/weg-1.jpg" alt="Weg" style="width: 100%;">
         </div>

         <!-- slide 8 -->
         <div class="mySlides">
            <div class="numbertext">8/10</div>
            <img src="./media/water-3.jpg" alt="Water" style="width: 100%;">
         </div>

         <!-- slide 9 -->
         <div class="mySlides">
            <div class="numbertext">9/10</div>
            <img src="./media/weiland-koeien-1.jpg" alt="Weiland met koeien" style="width: 100%;">
         </div>

         <!-- slide 10 -->
         <div class="mySlides">
            <div class="numbertext">10/10</div>
            <img src="./media/weiland-koeien-2.jpg" alt="Weiland met koeien" style="width: 100%;">
         </div>

         <!-- Volgende vorige knoppen -->
         <a class="prev" onclick="plusSlides(-1)">&#10094</a>
         <a class="next" onclick="plusSlides(1)">&#10095</a>

         <!-- Punten onder foto's -->
          <div style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>            
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>            
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
          </div>
      </div>
   </main>
</body>

</html>