<script setup lang="ts">
    import { router, useForm } from '@inertiajs/vue3';
    import SelectInput from '@/Components/SelectInput.vue';

    const props = defineProps({
        user: {
            type: Object,
            required: true
        },
    })

    const form = useForm({
        id: props.user.id,
        name: props.user.name,
        role: props.user.role,
    });

    const roleItems = [
        { label: 'user', value: 'user'},
        { label: 'admin', value: 'admin'},
        { label: 'team manager', value: 'team manager'},
        { label: 'department lead', value: 'deparment lead'}
    ]

    function deleteUser(){
        console.log(props.user.id)
        if (confirm("Are you sure you want to Delete")) {
            router.delete(`/users/${props.user.id}`)
        }
    }

    function updateUser(){
        if(confirm("Are you sure you want to update this users role?")){
            form.post('/users/update')
        }
    }
    
</script>

<template>
    <div class="grid grid-cols-4 gap-4 content-center h-12" >
        <div class="text-center grid content-center">
            {{ form.name }}
        </div>
        <div v-if="user.defaultAdmin != 1" class="grid content-center">
            <SelectInput
                    id="role"
                    class="mt-1 block w-full"
                    v-model="form.role"
                    :options="roleItems"
                    required
                    autocomplete="user"
                    />
        </div>
        <div v-if="user.defaultAdmin == 1" class="grid content-center text-center">
            {{ user.role }}
        </div>
        <div v-if="user.defaultAdmin != 1" class="grid content-center">
            <button @click="updateUser" class="rounded-md border-2 hover:bg-blue-500 h-10">Update</button>
        </div>
        <div v-if="user.defaultAdmin != 1" class="grid content-center">
            <button @click="deleteUser" class="rounded-md border-rose-500 border-2 hover:bg-rose-500 h-10">Delete</button>
        </div>
       

        
    </div>
</template>