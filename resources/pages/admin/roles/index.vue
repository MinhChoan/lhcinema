<template>
    Đây là trang quản lý vai trò
</template>

<script>
import { useMenu } from '../../../stores/use-menu';
import { defineComponent } from 'vue';

export default defineComponent({
    setup() {
        const menuStore = useMenu();
        menuStore.onSelectedKeys(["admin-roles"]);

        return {};
    },
});
</script>
