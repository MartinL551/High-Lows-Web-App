<script setup>
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';


const form = useForm({
    postContent: '',
    senstive: false
});


</script>

<template>
    <section class="space-y-6">
        <header>
            <h2 class="text-lg font-medium text-gray-900">Create Post</h2>

        </header>

        <div>
            <InputLabel for="postContent" value="Post Content" />
            <TextInput 
            id="postContent"
                    ref="postContent"
                    v-model="form.postContent"
                    type="postContent"
                    class=""
                    autocomplete="Please Enter post..."
            />
        </div>

        
    </section>
</template>
