<!-- LEFT SIDEBAR -->
<aside class="sidebar sidebar-left">
  
  <!-- Quick Enquiry Form -->
  <div class="sidebar-widget enquiry-widget">
    <h2 class="widget-title"><i class="fa-solid fa-paper-plane"></i> Quick Enquiry</h2>
    <form action="mail-right.php" method="post" class="enquiry-form" id="quickEnquiryForm">
      <div class="form-group">
        <label for="enquiryName" class="sr-only">Name</label>
        <input type="text" id="enquiryName" name="Name" placeholder="Your Name" required>
      </div>
      
      <div class="form-group">
        <label for="enquiryMobile" class="sr-only">Mobile No.</label>
        <input type="tel" id="enquiryMobile" name="Mobile_No" placeholder="Mobile Number" required>
      </div>
      
      <div class="form-group">
        <label for="enquiryEmail" class="sr-only">Email Id.</label>
        <input type="email" id="enquiryEmail" name="EMail" placeholder="Email Address" required>
      </div>
      
      <div class="form-group">
        <label for="enquiryMessage" class="sr-only">Message</label>
        <textarea id="enquiryMessage" name="Message" rows="4" placeholder="Your Message" required></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary btn-block">Send Enquiry <i class="fa-solid fa-paper-plane"></i></button>
    </form>
  </div>

  <!-- Testimonial Rotator Widget -->
  <div class="sidebar-widget testimonial-widget">
    <h2 class="widget-title"><i class="fa-solid fa-quote-left"></i> Testimonial</h2>
    <div class="testimonial-slider-container">
      <div class="testimonial-slide active">
        <div class="testimonial-content">
          <p>"The marketing consultants of flats and plots dealing with the real estate."</p>
          <h3>Shrine Properties</h3>
        </div>
      </div>
      <div class="testimonial-slide">
        <div class="testimonial-content">
          <p>"Excellent cabs and tour service in Vellore. Prompt and very professional drivers."</p>
          <h3>Ramesh Kumar</h3>
        </div>
      </div>
      <div class="testimonial-slide">
        <div class="testimonial-content">
          <p>"Vellore Travels made our visit to Sripuram Golden Temple and Yelagiri extremely comfortable."</p>
          <h3>Anita Sharma</h3>
        </div>
      </div>
    </div>
  </div>
</aside>
