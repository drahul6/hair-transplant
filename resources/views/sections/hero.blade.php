<!-- Banner Slider Section -->
<section class="banner-section">
  <div id="clinicCarousel" class="carousel slide" data-bs-ride="carousel">
    
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#clinicCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#clinicCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#clinicCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="{{ asset('images/banner_1.png') }}" class="d-block w-100" alt="Clinic Image 1">
        <div class="carousel-caption d-flex flex-column justify-content-center h-100">
          <!-- <h3 class="banner-title">Transform Your Look Today!</h3>
          <p class="banner-text">Get up to <span class="highlight">30% OFF</span> on your first hair transplant procedure</p>
          <a href="#contact" class="btn btn-warning btn-lg mt-3">Get Special Offer</a> -->
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="{{ asset('images/banner_2.png') }}" class="d-block w-100" alt="Clinic Image 2">
        <div class="carousel-caption d-flex flex-column justify-content-center h-100">
          <!-- <h3 class="banner-title">Expert Hair Transplant Specialists</h3>
          <p class="banner-text">Trusted by 1000+ satisfied patients worldwide</p>
          <a href="#contact" class="btn btn-warning btn-lg mt-3">Book Free Consultation</a> -->
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="{{ asset('images/banner_2.png') }}" class="d-block w-100" alt="Clinic Image 3">
        <div class="carousel-caption d-flex flex-column justify-content-center h-100">
          <!-- <h3 class="banner-title">Advanced Techniques</h3>
          <p class="banner-text">Natural Results with Lifetime Support</p>
          <a href="#contact" class="btn btn-warning btn-lg mt-3">Start Your Journey</a> -->
        </div>
      </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#clinicCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#clinicCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</section>
