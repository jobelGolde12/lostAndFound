<template>
    <div class="main-container d-flex flex-row bg-light">
        <LeftAdmin class="left" />
        <div class="right">
          <div class="container pt-4 d-flex flex-row justify-content-around">
            <Link href="#" class="py-1 px-4 rounded add-lost-item d-flex align-items-center text-light text-decoration-none"><i class="bi bi-plus me-2 fs-1"></i>Add Lost Item</Link>
            <Link href="#" class="py-1 px-4 rounded add-found-item d-flex align-items-center text-light text-decoration-none"><i class="bi bi-plus me-2 fs-1"></i>Add Found Item</Link>
          </div>


<div class="container mt-5">
    <div class="d-flex gap-2 align-items-center mb-2">
      <button class="btn btn-light" :class="{'btn-dark': viewLostItem}" @click="viewLostItemFunc">Lost Item</button>
      <button class="btn btn-light" :class="{'btn-dark': !viewLostItem}" @click="viewLostItemFunc">Found Item</button>
    </div>
    <table class="table table-striped">
        <thead class="">
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Category</th>
                <th>Color</th>
                <th>Date Lost</th>
                <th>Location Lost</th>
                <th>Owner Name</th>
                <th>Contact Info</th>
                <th>Additional Details</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Black Wallet</td>
                <td>Accessories</td>
                <td>Black</td>
                <td>2024-11-05</td>
                <td>Main Street, Bulan</td>
                <td>John Doe</td>
                <td>+63 912 345 6789</td>
                <td>Contains ID and credit cards</td>
                <td>Lost</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Blue Backpack</td>
                <td>Bags</td>
                <td>Blue</td>
                <td>2024-11-06</td>
                <td>Municipal Park, Bulan</td>
                <td>Jane Smith</td>
                <td>+63 923 456 7890</td>
                <td>Has a laptop and books</td>
                <td>Found</td>
            </tr>
        </tbody>
    </table>
</div>

        </div>
    </div>
</template>
<script>
import LeftAdmin from '@/Components/admin/LeftAdmin.vue';
import { Link } from '@inertiajs/vue3';
export default {
    name: 'dashboard',
    components: {
        LeftAdmin, Link
    },
    data(){
      return{
        viewLostItem: true
      }
    },
    methods:{
      viewLostItemFunc(){
        this.viewLostItem = !this.viewLostItem;
      }
    }
}
</script>
<style lang="css" scoped>
    .main-container {
  position: absolute;
  width: 100vw;
  height: 100vh;
  overflow-x: hidden;
}
.main-container .left {
  position: relative;
  width: 20%;
  height: 100%;
}
.main-container .right {
  position: relative;
  width: 80%;
  height: 100%;
  overflow-y: scroll;
}
@media screen and (max-width: 1024px) {
  .main-container .right {
    position: absolute;
    width: 100vw;
    height: 100vh;
    top: 0;
    left: 0;
  }
}

/* =================== */
.add-lost-item{
  background-color: #0093E9;
  background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);

}
.add-found-item{
  background-color: #8EC5FC;
  background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);

}
</style>