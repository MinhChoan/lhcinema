<template>
    <div class="container-fluid">
        <div class="row text-white" style="background-color:darkgreen; padding: 1.5rem;">
            <div class="col-1 d-flex d-sm-none align-items-center justify-content-center">
                <span @click="showDrawer()">
                    <i class="fa-solid fa-bars"></i>
                </span>
            </div>

            <div class="col-10 col-sm-9 d-flex align-items-center justify-content-center justify-content-sm-start">
                <img src="../assets/favicon.png" alt="LHCinema Logo" height="32" width="34" class="me-2">
                <span class="d-none d-sm-flex">Quản trị</span>
            </div>

            <div class="col-sm-3 d-none d-sm-flex align-items-center justify-content-sm-end">
                <span>Admin</span>
            </div>

            <div class="col-1 d-flex d-sm-none align-items-center justify-content-center">
                <span @click="showDrawerUser()">
                    <i class="fa-regular fa-user"></i>
                </span>
            </div>
        </div>
    </div>

    <a-drawer
        v-model:open="open"
        v-model:visible="visible"
        :root-style="{ color: 'blue' }"
        style="color: red"
        title="Danh mục"
        placement="left"
    >
        <TheMenu />
  </a-drawer>

  <a-drawer
        v-model:open="open_user"
        v-model:visible="visible_user"
        :root-style="{ color: 'blue' }"
        style="color: red"
        title="Admin"
        placement="right"
    >
        <p>Some contents...</p>
        <p>Some contents...</p>
        <p>Some contents...</p>
  </a-drawer>
</template>
<script setup>
    import TheMenu from './TheMenu.vue';
    import { MenuOutlined } from '@ant-design/icons-vue';

    import { defineComponent, ref,  } from 'vue';
    const open = ref(false);
    const open_user = ref(false);

    const showDrawer = () => {
    open.value = true;
    };
    const showDrawerUser = () => {
    open_user.value = true;
    };
</script>