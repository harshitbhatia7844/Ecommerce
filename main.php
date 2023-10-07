<?php include "./header.php"?>
    <div class="main">
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="numbertext">1 / 5</div>
              <a href="categories.php"><img src="images/48901882937374.jpg" style="width: 100%;"></a>
            </div>
            <div class="mySlides fade">
              <div class="numbertext">2 / 5</div>
              <a href="categories.php"><img src="images/48901883068446.jpg" style="width:100%"></a>
            </div>
            <div class="mySlides fade">
              <div class="numbertext">3 / 5</div>
              <a href="categories.php"><img src="images/48901883133982.jpg" style="width:100%"></a>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <a href="categories.php"><img src="images/48901883199518.jpg" style="width:100%"></a>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <a href="categories.php"><img src="images/48901885329438.jpg" style="width:100%"></a>
            </div>
          
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
          
          <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
        <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
        }
        </script>
        <div class="hero-section">
            <div class="ct-img">
                <a href="categories.php"><img src="images/48499357745182.jpg"></a>
            </div>
            <div class="ct-img">
                <a href="categories.php"><img src="images/48499358859294.jpg"></a>
            </div>
            <div class="ct-img">
                <a href="categories.php"><img src="images/48499357876254.jpg"></a>
            </div>
            <div class="ct-img">
                <a href="categories.php"><img src="images/48499357941790.jpg"></a>
            </div>
            <div class="ct-img">
                <a href="categories.php"><img src="images/48682859135006.jpg"></a>
            </div>
            <div class="ct-img">
                <a href="categories.php"><img src="images/48499358138398.jpg"></a>
            </div>
            <div class="ct-img">
                <a href="categories.php"><img src="images/48499358924830.jpg"></a>
            </div>
            <div class="ct-img">
                <a href="categories.php"><img src="images/48499358793758.jpg"></a>
            </div>
            <div class="ct-img">
                <a href="categories.php"><img src="images/48682859135006.jpg"></a>
            </div>
        </div>
        <div class="head1">
            <h1>Latest Trends</h1>
        </div>
        <div class="sale">
            <div class="sale-1">
                <a href="categories.php"><img src="images/48901879169054.jpg"></a>
            </div>
            <div class="sale-1">
                <a href="categories.php"><img src="images/48901872680990.jpg"></a>
            </div>
        </div>
        <div class="sale">
            <div class="sale-1">
                <a href="categories.php"><img src="images/48901877465118.jpg"></a>
            </div>
            <div class="sale-1">
                <a href="categories.php"><img src="images/48901877530654.jpg"></a>
            </div>
        </div>
        <div class="sale">
            <div class="sale-2">
                <a href="categories.php"><img src="images/48901872943134.jpg"></a>
            </div>
            <div class="sale-2">
                <a href="categories.php"><img src="images/48901873074206.jpg"></a>
            </div>
            <div class="sale-2">
                <a href="categories.php"><img src="images/48901873270814.jpg"></a>
            </div>
            <div class="sale-2">
                <a href="categories.php"><img src="images/48901873336350.jpg"></a>
            </div>
        </div>
        <div class="head1">
            <h1>Latest Trends</h1>
        </div>
        <div class="sale">
            <div class="sale-1">
                <a href="categories.php"><img src="images/48901879169054.jpg"></a>
            </div>
            <div class="sale-1">
                <a href="categories.php"><img src="images/48901872680990.jpg"></a>
            </div>
        </div>
        <div class="sale">
            <div class="sale-1">
                <a href="categories.php"><img src="images/48901877465118.jpg"></a>
            </div>
            <div class="sale-1">
                <a href="categories.php"><img src="images/48901877530654.jpg"></a>
            </div>
        </div>
        <div class="sale">
            <div class="sale-2">
                <a href="categories.php"><img src="images/48901872943134.jpg"></a>
            </div>
            <div class="sale-2">
                <a href="categories.php"><img src="images/48901873074206.jpg"></a>
            </div>
            <div class="sale-2">
                <a href="categories.php"><img src="images/48901873270814.jpg"></a>
            </div>
            <div class="sale-2">
                <a href="categories.php"><img src="images/48901873336350.jpg"></a>
            </div>
        </div>
    </div>    
<?php include "./footer.php"?>