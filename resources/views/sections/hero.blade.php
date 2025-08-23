<!-- Hero Banner Section -->
<section class="hero-banner-section">
  <div class="hero-background-image">
    <img src="{{ asset('/images/banner_background.png') }}" alt="Hair Transplant Procedure" class="hero-bg-img">
  </div>
  
  <div class="hero-overlay-content">
    <div class="container-fluid">
      <div class="row">
        <!-- Left Section - Text Content -->
        <div class="col-lg-6 hero-text-section">
          <div class="hero-text-content">
            <h1 class="hero-headline">
              <!-- <span class="hero-line-1">Life-Changing,</span>
              <span class="hero-line-2">Natural-Looking Results</span> -->
            </h1>
          </div>
        </div>

        <!-- Right Section - Contact Form Overlay -->
        <div class="col-lg-6 hero-form-section">
          <div class="contact-form-overlay">
            <div class="form-header">
              <h2 class="form-title">BOOK A HAIR LOSS CONSULTATION!</h2>
            </div>
            
            <form class="hero-contact-form" action="{{ route('contact.store') }}" method="POST">
              @csrf
              <div class="form-group mb-3">
                <input type="text" class="form-control" name="first_name" placeholder="First Name*" required>
              </div>
              
              <div class="form-group mb-3">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name*" required>
              </div>
              
              <div class="form-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="E-Mail*" required>
              </div>
              
              <div class="form-group mb-3">
                <select class="form-control" name="service" required>
                  <option value="">Please Select Service*</option>
                  <option value="Hair Transplant">Hair Transplant</option>
                  <option value="Beard Transplant">Beard Transplant</option>
                  <option value="Eye Brows Transplant">Eye Brows Transplant</option>
                  <option value="Moustache Transplant">Moustache Transplant</option>
                  <option value="PRP (Platelet Rich Plasma)">PRP (Platelet Rich Plasma)</option>
                  <option value="GFC Therapy">GFC Therapy</option>
                  <option value="Biotin PRP">Biotin PRP</option>
                  <option value="Meso Therapy">Meso Therapy</option>
                </select>
              </div>
              
              <div class="form-group mb-4">
                <input type="tel" class="form-control" name="phone" placeholder="Mobile Number*" required>
              </div>
              
              <button type="submit" class="btn btn-primary btn-book-now w-100">
                Book Now
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- WhatsApp Float Button -->
  <div class="whatsapp-float">
    <a href="https://wa.me/919896951620?text=Hi! I'm interested in hair transplant services. Can you help me?" target="_blank">
      <i class="fab fa-whatsapp"></i>
    </a>
  </div>
</section>
