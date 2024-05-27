<template>
    <div>
        <div v-if="$page.props.flash.message">
            <div  class="bg-green-100 text-green-800 pl-4 pr-10 py-4 rounded relative" role="alert">
                <div class="inline-block max-sm:mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-green-500 inline mr-4" viewBox="0 0 512 512">
                        <ellipse cx="256" cy="256" fill="#32bea6" data-original="#32bea6" rx="256" ry="255.832" />
                        <path fill="#fff" d="m235.472 392.08-121.04-94.296 34.416-44.168 74.328 57.904 122.672-177.016 46.032 31.888z"
                              data-original="#ffffff" />
                    </svg>
                    <strong class="font-bold text-base">Получилось!!</strong>
                </div>
                <span class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ $page.props.flash.message }}</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-7 hover:bg-green-200 rounded-md transition-all p-2 cursor-pointer fill-green-500 absolute right-4 top-1/2 -translate-y-1/2" viewBox="0 0 320.591 320.591">
                </svg>
            </div>
        </div>



        <div class="flex items-center mb-8">

            <div class="bg-gray-50 text-[#333] px-8 py-8 w-full rounded-lg font-[sans-serif]">
                <h1 class="text-4xl font-extrabold">{{advert.title}}</h1>
            </div>

        </div>



        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-8">
            <div>
                <img class="h-auto max-w-full rounded-lg" :src="advert.image.link" alt="">
            </div>
            <div v-if="photos !== ''">
                <img class="h-auto max-w-full rounded-lg" :src="photos[1].image" alt="">
            </div>
            <div v-if="photos !== ''">
                <img class="h-auto max-w-full rounded-lg" :src="photos[2].image" alt="">
            </div>
        </div>



        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div v-if="photos === ''" class="mx-auto mt-10">
                <div class="text-[#333] px-8 py-8 w-full rounded-lg font-[sans-serif]">
                    <a @click.prevent="getMorePhotos" href="#">
                        <h2 class="text-2xl font-extrabold">Загрузить</h2>
                        <h2 class="text-2xl font-extrabold">Ещё фото</h2>
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div class="bg-gray-100 font-[sans-serif]">
                <div class="container mx-auto p-8">
                    <div class="bg-white p-8 rounded shadow-md">
                        <h2 class="text-black text-2xl font-bold mb-4">Описание</h2>
                        <p class="text-gray-600 leading-relaxed text-base">
                            {{description}}
                        </p>
                        <div v-if="description === ''" class="mt-4">
                            <a href="#" @click.prevent="getDescription"  class="text-blue-500 font-semibold hover:underline text-base">Подргузить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <pre>

    </pre>

</template>

<script>
import {Link} from "@inertiajs/vue3";
import AdvertLayout from "@/Layouts/AdvertLayout.vue";

export default {
    name: "Show",

    layout: AdvertLayout,

    components: {
        Link
    },

    props: [
        'advert',
    ],

    data() {
        return {
            photos: '',
            description: '',
        }
    },

    methods: {
      getMorePhotos() {
          axios.get(`get-more-photos/${this.advert.id}`)
              .then(res => {
              this.photos = res.data
                  console.log(res)
          })
      },
      getDescription() {
          axios.get(`get-description/${this.advert.id}`)
              .then(res => {
              this.description = res.data
                  console.log(res.data)
          })
      }
    },

}
</script>

<style scoped>

</style>
