<template>
    <div class="flex flex-col-reverse md:grid grid-cols-1 md:grid-cols-12 gap-4">
        <Box class="md:col-span-7 flex items-center w-full">
            <div class="w-full text-center font-medium text-gary-500">
                No images
            </div>
        </Box>
        <div class="md:col-span-5 flex flex-col gap-4">
            <Box>
                <template #header>Basic info</template>
                <Price :price="listing.price" />
                <ListingSpace :listing="listing" class="text-xl"/>
                <ListingAddress :listing="listing" class="text-gray-500"/>
            </Box>
            <Box>
                <template #header>Offer</template>
                Make an offer
            </Box>
        </div>
    </div>
    <Link></Link>

</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';
import Price from '@/Components/Price.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Box from '@/Components/UI/Box.vue';

defineProps({
    listing: Object,
})

</script>

