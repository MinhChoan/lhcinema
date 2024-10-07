<template>
    <a-menu
      :openKeys="openKeys"
      :selectedKeys="selectedKeys"
      mode="inline"
      :items="items"
      @update:openKeys="onOpenKeys"
      @update:selectedKeys="onSelectedKeys"
    >
        <a-menu-item key="admin-users">
            <router-link :to="{name: 'admin-users'}">
                <span><UserOutlined class="me-1" />Tài khoản</span>
            </router-link>
        </a-menu-item>
        <a-menu-item key="admin-roles">
            <router-link :to="{name: 'admin-roles'}">
                <span><TagOutlined class="me-1" />Vai trò</span>
            </router-link>
        </a-menu-item>
        <a-menu-item key="admin-settings">
            <router-link :to="{name: 'admin-settings'}">
                <span><SettingOutlined class="me-1" />Cài đặt</span>
            </router-link>
        </a-menu-item>
    </a-menu>
</template>

<script>
import { storeToRefs } from 'pinia';
import { useMenu } from '../stores/use-menu';
import { defineComponent } from 'vue';
import { UserOutlined, TagOutlined, SettingOutlined } from '@ant-design/icons-vue';
export default defineComponent({
    components: {
        UserOutlined,
        TagOutlined,
        SettingOutlined,
    },
    setup() {
        const menuStore = useMenu();
        const { openKeys, selectedKeys } = storeToRefs(menuStore);

        return {
            openKeys,
            selectedKeys,

        };
    },
});
</script>
