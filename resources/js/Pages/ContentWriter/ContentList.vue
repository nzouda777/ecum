<script setup>
import { Link, useForm } from "@inertiajs/vue3";
    const props = defineProps({
        lists: Object
    })

    const deleteContent = (id) => {
        const deleteForm = useForm({
            id: id
        })
        deleteForm.delete(route('destroy.content', id), {
            onSuccess() {
                deleteForm.reset()
            }
        })
    }
</script>

<template>
    <header class="border-b">
        <div class="max-w-[1400px] py-2 px-4 mx-auto ">
            <div class="flex items-center justify-between">
                <Link href="http://ecumecollagen.com/" >
                    <img 
                        src="https://ecumecollagen.com/cdn/shop/files/ecume_logo_3_380x.png?v=1681176462" alt=""
                        class="h-24 w-full"
                    >
                </Link>
                <div class="uppercase font-semibold  lg:text-lg text-base">
                   <Link :href="route('post.Content')" >
                    Create New Content
                </Link>
                </div>
            </div>
        </div>
    </header>

    <section class="mt-16 max-w-[1400px]  px-4 mx-auto">
        <div class="border-b flex items-center justify-between border-t py-6  " v-for="(list, index) in lists" :key="index">
            <h4>{{list.title}}</h4>
            <div class="flex gap-8">
                <Link :href="route('show.content', list.id)" class="bg-green-500 p-1 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </Link>
                <button @click="deleteContent(list.id)" :v-model="list.id" class="bg-red-500 p-1 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
</template>