<template>

    <div>
        <ListingAddress :listing="listing"/>
    </div>
    <Link></Link>

</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';

defineProps({
    listing: Object,
})

</script>

