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
         <div class="hero-content container bg-light text-dark text-center mt-5">
            <h1 class="text-dark">
                Find and Report Lost or Found <br>
                Items in Bulan <span class="has-paint text-light">Easily</span>
            </h1>
            <p class="text-dark text-center">Join others in Bulan and report lost or found items with just a few clicks.</p>

            <div class="action-button container d-flex flex-row align-items-center justify-content-center gap-5 pt-3 px-5">
                <a href="#" class="text-decoration-none report-lost-item-link px-2 py-2">Report Lost Item <i class="bi bi-arrow-right text-dark"></i></a>
                <a href="#" class="text-decoration-none text-light bg-dark px-2 py-2 report-found-item-link">Report Found Item</a>
            </div>
         </div>
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
.main-container{
    width: 100vw;
    height: 100vh;
    overflow-x: hidden;
}
.signup-link{
    border-radius: 5px;
} 
.has-paint{
    position: relative;
    z-index: 3;
    display: inline-block;
}
.has-paint::after{
    content: '';
    position: absolute;
    background: url('../../images/paint.png') no-repeat center center;
    width: 150px;
    height: 80px;
    top: -5%;
    left: -10%;
    z-index: -1;
    background-size: cover;
    background-position: center;
    transform: rotate(10deg);
}
.hero-content h1{
    font-size: 3rem;
}
.report-lost-item-link{
    color: var(--clr-secondary);
}
.report-lost-item-link:hover{
    background: rgba(0,0,0,.2);
}
.report-found-item-link , .report-lost-item-link{
    border-radius: 5px;
}
</style>