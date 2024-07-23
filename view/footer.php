
<div class="row mb footer">
<footer>
  <div class="footer-content">
    <div class="footer-section about">
      <h3>About Us</h3>
      <p>We are a company dedicated to providing high-quality products and services to our customers.</p>
    </div>
    <div class="footer-section links">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="footer-section contact">
      <h3>Contact Us</h3>
      <div class="contact-info">
        <i class="fas fa-map-marker-alt"></i>
        <span>123 Example Street, Anytown USA</span>
      </div>
      <div class="contact-info">
        <i class="fas fa-phone"></i>
        <span>+1 (123) 456-7890</span>
      </div>
      <div class="contact-info">
        <i class="fas fa-envelope"></i>
        <span>info@example.com</span>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 Example Company. All rights reserved.</p>
  </div>
</footer>

<style>
  footer {
    background-color: #333;
    color: #fff;
    padding: 40px 0;
    font-size: 14px;
  }

  .footer-content {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
  }

  .footer-section {
    width: 30%;
  }

  .footer-section h3 {
    margin-bottom: 20px;
  }

  .footer-section ul {
    list-style-type: none;
    padding: 0;
  }

  .footer-section ul li {
    margin-bottom: 10px;
  }

  .footer-section ul li a {
    color: #fff;
    text-decoration: none;
  }

  .footer-section ul li a:hover {
    color: #ccc;
  }

  .contact-info {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }

  .contact-info i {
    margin-right: 10px;
  }

  .footer-bottom {
    text-align: center;
    margin-top: 40px;
  }
</style>
    </div>

 </div>
 <script>
   let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
 </script>
</body>
</html>