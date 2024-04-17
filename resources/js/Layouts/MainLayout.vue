<template>

    <header class="border-b border-gray-200 dark:border-gray-700 dark:bg-gray-800 bg-white w-full">
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="font-medium">
                    <Link :href="route('listing.index')"> Listing Page </Link>
                </div>
                <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold">
                 <Link :href="route('index')"> LaraZillow </Link>
                </div>
               <div class="">
                <Link :href="route('listing.create')" class="btn-primary"> + New Listing </Link>
               </div>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4">
        <div v-if="flashSuccess" class="mb-4 border rounded shadow-sm border-green-600 dark:border-green-200 bg-green-100 text-green-700 p-2">
            {{ flashSuccess }}
        </div>
        <slot></slot>
    </main>

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

</style>
