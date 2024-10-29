<template>
    <div class="main-container d-flex flex-row bg-light">
        <LeftAdmin class="left" />
        <RightAdmin class="right" />
    </div>
</template>
<script>
import LeftAdmin from '@/Components/admin/LeftAdmin.vue';
import RightAdmin from '@/Components/admin/RightAdmin.vue';
export default {
    name: 'dashboard',
    components: {
        LeftAdmin, RightAdmin
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
</style>