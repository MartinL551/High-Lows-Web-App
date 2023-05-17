<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';
import PostsForm from './Posts/PostsForm.vue';

import { ref } from 'vue';

const makingHighLowPost = ref(false);

const makeHighLowPost = () => {
    makingHighLowPost.value = true;
};

const closeModal = () => {
    makingHighLowPost.value = false;
};

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
            <button @click="makeHighLowPost">Post a High/Low</button>
        
            
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div>
        </div>

        <modal :show="makingHighLowPost" @close="closeModal">
            <PostsForm class="max-w-xl"/> 
        </modal>

    </AuthenticatedLayout>
</template>
