<template>
        <Head title="Welcome" />
    <div class="main-container bg-light">

        <!-- Navagation bar -->
        <div class="navbar d-flex flex-row justify-content-between align-items-center px-3">
            <div class="logo"><h4 class="text-dark">Lost And Found</h4></div>
            <div class="links d-none d-lg-flex flex-row gap-4 align-items-center">
                    <a href="#about" class="text-dark text-decoration-none">About</a>
                    <Link :href="route('contactPage')" class="text-dark text-decoration-none">Contact</Link>
                    <Link :href="route('login')" class="text-dark text-decoration-none">Login</Link>
                    <Link :href="route('register')" class=" text-decoration-none bg-dark text-light px-2 py-1 signup-link">Signup</Link>
    <Link :href="route('admin')" >Admin </Link>

            </div>

            <div class="bi bi-list fs-1 fw-bolder pointer hover d-block d-lg-none"></div>
        </div>


        <!-- hero section content  -->
         <section id="hero-content" class=" d-flex flex-column align-items-center justify-content-center bg-light text-dark text-center mt-3">
                        <h1 class="text-dark text-center">
                            Find and Report Lost or Found <br>
                            Items in Bulan <span class="has-paint text-light">Easily</span>
                        </h1>
                        <p class="text-dark text-center ">Join others in Bulan and report lost or found items with just a few clicks.</p>

                        <div class="action-button container d-flex flex-row align-items-center justify-content-center gap-5 pt-3 px-5">
                            <a href="#" class="text-decoration-none report-lost-item-link px-3 py-2">Report Lost Item <i class="bi bi-arrow-right text-dark"></i></a>
                            <Link :href="route('dashboard')" class="text-decoration-none text-light bg-dark px-3 py-2 report-found-item-link">Report Found Item</Link>
                        </div>

                    <div class="hero-image-container mt-5 p-0 pt-5 bg-light d-flex flex-row align-items-center ps-0 ms-0">
                        <img src="../../images/missing-dog.jpg" alt="" class="img1">
                        <img src="../../images/missing-phone.jpg" alt="" class="img2">
                        <img src="../../images/missing-laptop.jpg" alt="" class="img3">
                        <img src="../../images/misssing-key.jpg" alt="" class="img4">
                        <img src="../../images/missing-camera.jpg" alt="" class="img5">
                        <img src="../../images/missing bag.jpg" alt="" class="img6">
                        <img src="../../images/missing-usb.jpg" alt="" class="img7">
                        <img src="../../images/missing-bike.jpg" alt="" class="img8">
                        <img src="../../images/missing-kid.jpg" alt="" class="img9">
                    </div>
        </section>





        <section id="about">
            <div class="container text-center pt-5">
                <h1 class="text-dark fw-bolder">About Us!</h1>


                  <div class="about-hero-section mt-5">
                            <div class="container custom-container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 text-left">
                                <h1 class="hero-title">Welcome to the Bulan Lost and Found Website!</h1>
                                <p class="hero-subtitle">This platform was created to help the people of Bulan reconnect with their lost items and recover valuables. Our goal is to make it easier for individuals to report lost or found items and promote a more connected, responsible community.</p>
                                </div>
                                <div class="col-lg-6 text-left about-image-container">
                                <img src="../../images/happy.svg" alt="Image kinam" class=" d about-image">
                                <!-- <h5 class="text-dark">Our Mission</h5>
                                <p class="d-block text-dark">We aim to provide a simple, user-friendly online service that bridges the gap between those who have lost something and those who have found it.</p> -->
                                </div>
                            </div>
                            </div>
                        </div>
            </div>
        </section>


        <section id="howItsWork">
  <div class="stats-section pt-5 mt-5">
    <h1 class="text-dark text-center fw-bolder pt-5 mb-3">How It Works?</h1>
    <div class="container custom-container mt-5 pt-5">
      <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="stats-card text-center">
            <img src="../../images/announce.svg" alt="">
            <div class="stats-title mt-3">Report a Lost Item</div>
            <div class="stats-label">Post details about your missing item, including a description, last known location, and contact information.</div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="stats-card text-center">
            <img src="../../images/found.svg" alt="">
            <div class="stats-title mt-3">Report a Found Item</div>
            <div class="stats-label">Post details of what you found to help the rightful owner claim their lost property.</div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="stats-card text-center">
            <img src="../../images/brows.svg" alt="">
            <div class="stats-title mt-3">Browse Lost or Found Listings</div>
            <div class="stats-label">Check listings to see if your item has been found or if someone is looking for what you found.</div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="stats-card text-center">
            <img src="../../images/claim.svg" alt="">
            <div class="stats-title mt-3">Reclaim or Return Items</div>
            <div class="stats-label">Contact the person and arrange the return once an item matches.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






<footer id="footer" class="footer mt-5 pt-5">
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-4">
        <div class="logo-section">
          <p>Find and Report Lost or Found
            Items in Bulan easily</p>
        </div>
      </div> -->
      <div class="col-md-3">
        <h5>Contact Info.</h5>
        <ul class="list-unstyled">
          <li><a href="#">jobelgolde43@gmail.com</a></li>
          <li><a href="#">09930543293</a></li>
          <li><a href="#">Bonga, Bulan, Sor</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Social media</h5>
        <ul class="list-unstyled">
          <li><a href="#"><i class="bi bi-facebook text-light me-1"></i>Facebook</a></li>
          <li><a href="#"><i class="bi bi-twitter text-light me-1"></i>Twitter</a></li>
          <li><a href="#"><i class="bi bi-instagram text-light me-1"></i>Instagram</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#hero-content">Home</a></li>
          <li> <Link :href="route('contactPage')" class="link text-decoration-none">Contact</Link></li>
          <li><a href="#about">About Us</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Company</h5>
        <ul class="list-unstyled">
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4">
        <h5>Bulan Lost And Found Website</h5>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
      <!-- <div class="col-md-8 text-md-end">
        <form class="subscribe-form">
          <input type="email" class="form-control" placeholder="Enter email address">
          <button class="btn btn-primary">Subscribe</button>
        </form>
      </div> -->
    </div>
  </div>
</footer>

    </div>

</template>
<script>
import { Head, Link } from '@inertiajs/vue3';
export default {
    name: 'welcome',
    components: {
      Link, Head
    }
}
</script>
<style lang="css" scoped>
@import '../../css/global.css';
@import '../../css/welcome.css';
</style>