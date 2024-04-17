<template>
    <Link :href="route('index')"> Main Page </Link>
    <Link :href="route('show')"> Show Page </Link>
    <Link :href="route('listing.index')"> Listing Page </Link>
    <Link :href="route('listing.create')"> Listing Create </Link>

    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>

    <slot></slot>
</template>

<script setup>
    import { Link, usePage } from '@inertiajs/vue3';
    import { computed } from 'vue';

    const page = usePage();
    const flashSuccess = computed(() => {
        return page.props.flash.success
    });

</script>

<style scoped>
    .success{
        background-color: rgb(0, 141, 0);
        color: white;
        border-radius: 10px;
        padding: 10px;
        margin: 10px;
        border: 3px solid rgb(0, 68, 0);
    }
</style>
