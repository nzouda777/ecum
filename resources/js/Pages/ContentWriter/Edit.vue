<script setup>
import { defineProps, reactive, onMounted } from 'vue'
import { useForm, Link } from '@inertiajs/vue3'
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { ref } from "vue";

const props = defineProps({
  config: {
    type: Object,
    default: () => ({
      events: {
        initialized: function() {
          console.log('initialized')
        }
      },
      imageMove: true,
	      imageUploadParam: 'file',
	      imageUploadMethod: 'post',

	      // Set the image upload URL.
	    //   imageUploadURL: "/ecum/app/http/Controllers/uploadController.php",
	      imageUploadParams: {
	        froala: 'true', // This allows us to distinguish between Froala or a regular file upload.
	        _token: "{{ csrf_token() }}" // This passes the laravel token with the ajax request.
	      }

    })
  },
  content: Object
})
const posted = ref(false)
const 
  editForm= useForm({
    content: props.content.contenu,
    title: props.content.title,
    id: props.content.id
})

const postContent = () => {
    editForm.clearErrors()
    editForm.processing = true
    axios.post(route('edit.content', props.content.id), editForm.data()).then(r => {
        // location.reload()
    }).catch(e => {
        if (e.response && e.response.status === 422) {
            editForm.setError(e.response.data.errors)
            console.error(e.response.data.errors)
        } else {
            // notify user
        }
        if (e.response && e.response.status === 419 || e.response.status === 404 || e.response.status === 500 || e.response.status === 501) {
           editForm.setError(e.response.data)
           
            console.error(e.response.data.errors)
        } else {
            console.log("done")
        }
        editForm.processing = false
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
                   <Link :href="route('content.list')" >
                    Content List
                </Link>
                </div>
            </div>
        </div>
    </header>
<section class="max-w-[1400px] w-full px-4 mt-16 mx-auto">
    <div class="mb-4">
        <InputLabel class="block">Titre du contenu</InputLabel>
        <TextInput v-model="editForm.title" type="text" />
        <InputError :message="editForm.errors.title" />
    </div>
    <froala id="edit" :tag="'textarea'" :config="config" v-model:value="editForm.content"></froala>
    <InputError :message="editForm.errors.content" />
     <div class="mt-6">
        <button type="button" @click.prevent="postContent"
            class="inline-flex items-center justify-center w-full px-6 py-4 text-sm font-bold bg-gray-900 text-gray-100 transition-all duration-200 border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-offset-gray-900 focus:ring-offset-2 focus:ring-white ">
                <svg aria-hidden="true" v-if="editForm.processing" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="#E5E7EB" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentColor" />
                </svg>
            Valider le Contenu
        </button>
    </div>
</section>
</template>