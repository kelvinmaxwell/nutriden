<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Footer</h4>
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
   <a  href="https://www.fb.com"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
   <a  href="https://www.instagram.com"> <i class="fa fa-instagram w3-hover-opacity"></i>
   <a  href="https://www.snapchat.com"> <i class="fa fa-snapchat w3-hover-opacity"></i>
   <a  href="https://www.pintrest.com"> <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <a  href="https://www.twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i>
   <a  href="https://www.linkedin.com"> <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">kelvinmaxwell(w3school)</a></p>
</footer>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>