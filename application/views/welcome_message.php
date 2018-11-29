<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<body bgcolor="#ff9933">

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="#plans" class="w3-button w3-block">Plans</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block">About</a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block">Contact</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>NUTRIDEN</b></h1>
    <p>Nutrition</p>
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
     <img src="<?php echo base_url();?>assets/images/pik1.jpg"  alt="you"style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">FOODS</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="<?php echo base_url();?>assets/images/pik2.jpg"  alt="you"style="width:100%">
      <div class="w3-display-middle w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Health</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="<?php echo base_url();?>assets/images/pik3.jpg"  alt="you"style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">EXERRCISE</span>
      </div>
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">What We Offer</span>
    </div>
    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>medical</h3>
      <p>foods</p>
    </div>

    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>Gim</h3>
      <p>gim</p>
    </div>

    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>health care</h3>
    health</p>
    </div>

    <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
      <h3>now</h3>
      <p>now</p>
    </div>
  </div>

  <!-- Grid -->
  <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>Pricing Plans</h3>
      <p>Choose a pricing plan that fits your needs.</p>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>workout</b> alone</li>
        <li class="w3-padding-16"><b>workous</b> cared</li>
        <li class="w3-padding-16"><b>workout</b> Doctor</li>
        <li class="w3-padding-16"><b>workouts</b> group</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">monthly</li>
        <li class="w3-padding-16"><b>workouts</b> Doctor</li>
        <li class="w3-padding-16"><b>workouts</b> doctor</li>
        <li class="w3-padding-16"><b>workout</b> Doctor</li>
        <li class="w3-padding-16"><b>workouts</b> Doctor</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">yearly</li>
        <li class="w3-padding-16"><b>medical</b> free</li>
        <li class="w3-padding-16"><b>medical $gim</b> free</li>
        <li class="w3-padding-16"><b>mediacl</b>free</li>
        <li class="w3-padding-16"><b>medical</b> foods</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>

  <!-- Grid -->
  <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Who We Are</span>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="<?php echo base_url();?>assets/images/pik7.jpg"  alt="you"style="width:100%">
        <div class="w3-container">
          <h3>Davies</h3>
          <p class="w3-opacity">brother</p>
          <p>brother to the nutrionist.</p>
          <p><button class="w3-button w3-light-grey w3-block">070729498907</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="<?php echo base_url();?>assets/images/pik4.jpg"  alt="you"style="width:100%">
        <div class="w3-container">
          <h3>Denis</h3>
          <p class="w3-opacity">BRO</p>
          <p>Qualified nutrionist around the globe and love for health.</p>
          <p><button class="w3-button w3-light-grey w3-block">0710941002</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="<?php echo base_url();?>assets/images/pik6.jpg"  alt="you"style="width:100%">
        <div class="w3-container">
          <h3>Maxi</h3>
          <p class="w3-opacity">BRO</p>
          <p>Younger developer brother of the three.</p>
          <p><button class="w3-button w3-light-grey w3-block">0729312006</button></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact -->
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
  </div>

  <form class="w3-container" method ="POST"action="<?php echo base_url();?>index.php/main/handleform" action_page.php" target="_blank">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
    </div>
    <div class="w3-section">
      <label>Subject</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
    </div>
    <button type="submit" class="w3-button w3-block w3-black">Send</button>
  </form>

</div>

<?php 
// echo $contacts->name;?>
<!-- Footer -->


