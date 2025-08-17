<!-- Contact Section -->
<section id="contact" class="contact-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Ready to transform your look? Contact us today for a free consultation</p>
        </div>
        
        <div class="row">
            <!-- Contact Form Column -->
            <div class="col-lg-7">
                <div class="contact-form-container">
                    <h3 class="form-title">Send us a Message</h3>
                    <form class="contact-form" id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-user"></i> Full Name
                                    </label>
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-envelope"></i> Email Address
                                    </label>
                                    <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-phone"></i> Phone Number
                                    </label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+1 (555) 123-4567">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-calendar"></i> Preferred Date
                                    </label>
                                    <input type="date" name="preferred_date" class="form-control">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-comment"></i> How can we help you?
                            </label>
                            <select name="service" class="form-control">
                                <option value="">Select a service</option>
                                <option value="fue">FUE Hair Transplant</option>
                                <option value="prp">PRP Therapy</option>
                                <option value="beard">Beard & Eyebrow Transplant</option>
                                <option value="consultation">Free Consultation</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-file-alt"></i> Message
                            </label>
                            <textarea name="message" class="form-control" rows="4" placeholder="Tell us about your hair loss concerns and what you'd like to achieve..." required></textarea>
                            <div class="invalid-feedback"></div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg submit-btn" id="submitBtn">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                        
                        <!-- Success/Error Messages -->
                        <div id="formMessage" class="mt-3" style="display: none;"></div>
                    </form>
                </div>
            </div>
            
            <!-- Contact Info Column -->
            <div class="col-lg-5">
                <div class="contact-info-container">
                    <h3 class="info-title">Contact Information</h3>
                    
                    <div class="contact-info-grid">
                        <div class="contact-info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h5>Visit Our Clinic</h5>
                                <p>
                                Revival Hair Transplant Clinic,Sco no.36, <br>First Floor,Mohali City Square,<br> Near Gopal Sweet <a href="#gmap">Map Location</a></p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-content">
                                <h5>Call Us</h5>
                                <p>+91 82648 59027<br>9:00 AM - 9:00 PM</p>
                            </div>
                        </div>
                        

                        
                        <div class="contact-info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h5>Email Us</h5>
                                <p>consultations@revivalcliniczirakpur.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="info-content">
                                <h5>Business Hours</h5>
                                <p>Monday - Sunday: 9:00 AM - 9:00 PM</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="info-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="info-content">
                                <h5>Appointments</h5>
                                <p>Book online or call us<br>Same day consultations available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- WhatsApp Floating Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/7988188609?text=Hi! I'm interested in hair transplant services. Can you help me?" 
           class="whatsapp-float-btn" target="_blank" title="Chat with us on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
</section>
