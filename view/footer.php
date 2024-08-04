
<div class="row mb footer">
    <div>
    <div class="footer-navigation section-padding">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <!-- footer description -->
                    <div class="footer-description">
                        <div class="footer-logo">
                            <img width="220" height="100" src="../images/LOGO.jpg" alt="">
                        </div>
                    </div>
                    <!-- end of footer description -->
                </div>
                <div class="col-lg-8 col-md-8">
                    <!-- footer nav links -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!-- single footer nav block -->
                            <div class="single-footer-nav-block">
                                <h2 class="block-title">INFORMATION</h2>
                                <ul class="footer-nav-links">
                                    <li><a href="shop-left-sidebar.html">Specials</a></li>
                                    <li><a href="shop-left-sidebar.html">New Products</a></li>
                                    <li><a href="shop-left-sidebar.html">Best Sellers</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                </ul>
                            </div>
                            <!-- end of single footer nav block -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single footer nav block -->
                            <div class="single-footer-nav-block">
                                <h2 class="block-title"><a href="my-account.html">MY ACCOUNT</a>
                                </h2>
                                <ul class="footer-nav-links">
                                    <li><a href="#">My Orders</a></li>
                                    <li><a href="#">My Credit Slips</a></li>
                                    <li><a href="my-account.html">My Addresses</a></li>
                                    <li><a href="my-account.html">My Personal Info</a></li>
                                </ul>
                            </div>
                            <!-- end of single footer nav block -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single footer nav block -->
                            <div class="single-footer-nav-block">
                                <h2 class="block-title">CATEGORIES</h2>
                                <ul class="footer-nav-links">
                                    <li><a href="shop-left-sidebar.html">Football</a></li>
                                    <li><a href="shop-left-sidebar.html">Tennis</a></li>
                                    <li><a href="shop-left-sidebar.html">Formula</a></li>
                                    <li><a href="shop-left-sidebar.html">Cricket</a></li>
                                    <li><a href="shop-left-sidebar.html">Baseball</a></li>
                                </ul>
                            </div>
                            <!-- end of single footer nav block -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single footer nav block -->
                            <div class="single-footer-nav-block">
                                <h2 class="block-title">OUR SERVICES</h2>
                                <ul class="footer-nav-links">
                                    <li><a href="store.html">Our Stores</a></li>
                                    <li><a href="about.html">Information</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms &amp; Condition</a></li>
                                </ul>
                            </div>
                            <!-- end of single footer nav block -->
                        </div>
                    </div>
                    <!-- end of footer nav links -->

                </div>
            </div>
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