<template>
        <Head title="Welcome" />
    <div class="main-container bg-light">

        <!-- Navagation bar -->
        <div class="navbar d-flex flex-row justify-content-between align-items-center px-3">
            <div class="logo"><h4 class="text-dark">Lost And Found</h4></div>
            <div class="links d-flex flex-row gap-4 align-items-center">
                <a href="#" class="text-dark text-decoration-none">About</a>
                <a href="#" class="text-dark text-decoration-none">Contact</a>
                <a href="#" class="text-dark text-decoration-none">Login</a>
                <a href="#" class=" text-decoration-none bg-dark text-light px-2 py-1 signup-link">Signup</a>
            </div>
        </div>


        <!-- hero section content  -->
         <section id="hero-content" class=" d-flex flex-column align-items-center justify-content-center bg-light text-dark text-center mt-3">
                        <h1 class="text-dark">
                            Find and Report Lost or Found <br>
                            Items in Bulan <span class="has-paint text-light">Easily</span>
                        </h1>
                        <p class="text-dark text-center">Join others in Bulan and report lost or found items with just a few clicks.</p>

                        <div class="action-button container d-flex flex-row align-items-center justify-content-center gap-5 pt-3 px-5">
                            <a href="#" class="text-decoration-none report-lost-item-link px-2 py-2">Report Lost Item <i class="bi bi-arrow-right text-dark"></i></a>
                            <a href="#" class="text-decoration-none text-light bg-dark px-2 py-2 report-found-item-link">Report Found Item</a>
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

  
                                 <!-- Todo ma butang image                -->
                            <div class="stats-section">
                                <h1 class="text-dark fw-bolder mt-5 mb-3">How It Works?</h1>
                                <div class="container custom-container">
                                <div class="row">
                                    <!-- Card 1 -->
                                    <div class="col-lg-3 col-md-6 mb-5">
                                    <div class="stats-card">
                                        <div class="stats-title">Report a Lost Item</div>
                                        <div class="stats-label text-left">If you have lost something, you can post details about your missing item, including a description, last known location, and contact information.</div>
                                    </div>
                                    </div>
                                    <!-- Card 2 -->
                                    <div class="col-lg-3 col-md-6 mb-5">
                                    <div class="stats-card">
                                        <div class="stats-title">Report a Found Item</div>
                                        <div class="stats-label text-left">If you have found something, you can post the details here to help the rightful owner claim their lost property.</div>
                                    </div>
                                    </div>
                                    
                                    <!-- Card 3 -->
                                    <div class="col-lg-3 col-md-6 mb-5">
                                    <div class="stats-card ">
                                        <div class="stats-title">Browse Lost or Found Listings</div>
                                        <div class="stats-label text-left">Check the listings to see if your item has been found or if someone is looking for what you found.</div>
                                    </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 mb-5">
                                    <div class="stats-card ">
                                        <div class="stats-title">Reclaim or Return Items</div>
                                        <div class="stats-label text-left"> Once an item matches, contact the person who found or lost it and arrange the return.</div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

            </div>
        </section>
    </div>
</template>
<script>
import { Head, Link } from '@inertiajs/vue3';
export default {
    name: 'welcome'
}
</script>
<style lang="css" scoped>
@import '../../css/global.css';
@import '../../css/welcome.css';
</style>