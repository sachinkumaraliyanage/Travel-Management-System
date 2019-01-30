<div class="slideshow-container">

<div class="mySlides fade">
 <!-- <div class="numbertext">1 / 3</div>-->
  <img src="img/heder/ga/a.jpg" style="width:100%">
  <!--<div class="text">Caption Text</div>-->

</div>

<div class="mySlides fad">
 <!-- <div class="numbertext">1 / 3</div>-->
  <img src="img/heder/ga/a.jpg" style="width:100%">
  <!--<div class="text">Caption Text</div>-->

</div>

<div class="mySlides fade">
 
  <img src="img/heder/ga/b.jpg" style="width:100%">
  
</div>

<div class="mySlides fad">
 
  <img src="img/heder/ga/b.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="img/heder/ga/c.jpg" style="width:100%">
  
</div>

<div class="mySlides fad">
  
  <img src="img/heder/ga/c.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="img/heder/ga/d.jpg" style="width:100%">
  
</div>

<div class="mySlides fad">
  
  <img src="img/heder/ga/d.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="img/heder/ga/e.jpg" style="width:100%">
  
</div>

<div class="mySlides fad">
  
  <img src="img/heder/ga/e.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  
  <img src="img/heder/ga/f.jpg" style="width:100%">
  
</div>

<div class="mySlides fad">
  
  <img src="img/heder/ga/f.jpg" style="width:100%">
  
</div>

</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
       //slides[slideIndex].style.display="block";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
   // for (i = 0; i < dots.length; i++) {
        //dots[i].className = dots[i].className.replace(" active", "");
   // }
    slides[slideIndex-1].style.display = "block";  
    //dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 10000); // Change image every 2 seconds
}
</script>