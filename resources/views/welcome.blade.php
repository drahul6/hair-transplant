<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Transplant Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
  <img src="{{ asset('/images/logo.png') }}" alt="Revival Hair Transplant Clinic" style="height:40px; margin-right:10px;">
  <span style="font-size:24px; font-weight:800; color:#0077ff; font-family: 'Poppins', sans-serif;">
    Revival Hair Transplant Clinic
  </span>
</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link insta-icon" href="https://www.instagram.com/revivalclinic97/?hl=en" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @include('sections.hero')
    @include('sections.banner')
    @include('sections.about')
    @include('sections.services')
    @include('sections.results')
    @include('sections.technologies')
    @include('sections.contact')
    @include('sections.footer')

    <!-- WhatsApp Floating Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/7988188609?text=Hi! I'm interested in hair transplant services. Can you help me?" 
           class="whatsapp-float-btn" target="_blank" title="Chat with us on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Contact Form JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const formMessage = document.getElementById('formMessage');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Reset previous messages
                formMessage.style.display = 'none';
                formMessage.className = 'mt-3';
                
                // Clear previous validation errors
                const invalidFeedbacks = contactForm.querySelectorAll('.invalid-feedback');
                const formControls = contactForm.querySelectorAll('.form-control');
                
                invalidFeedbacks.forEach(feedback => feedback.textContent = '');
                formControls.forEach(control => control.classList.remove('is-invalid'));
                
                // Disable submit button and show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                
                // Get form data
                const formData = new FormData(contactForm);
                
                // Send AJAX request
                fetch('/contact', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Success message
                        formMessage.className = 'mt-3 alert alert-success';
                        formMessage.textContent = data.message;
                        formMessage.style.display = 'block';
                        
                        // Reset form
                        contactForm.reset();
                        
                        // Scroll to message
                        formMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    } else {
                        // Error message
                        formMessage.className = 'mt-3 alert alert-danger';
                        formMessage.textContent = data.message;
                        formMessage.style.display = 'block';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    formMessage.className = 'mt-3 alert alert-danger';
                    formMessage.textContent = 'An unexpected error occurred. Please try again.';
                    formMessage.style.display = 'block';
                })
                .finally(() => {
                    // Re-enable submit button
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
                });
            });
        });
    </script>
</body>
</html>
