<template>

    <div class="font-[sans-serif] space-y-6">

        <div v-if="$page.props.errors.title" class="bg-red-100 text-red-800 pl-4 pr-10 py-4 rounded relative" role="alert">
            <div class="inline-block max-sm:mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 inline mr-4" viewBox="0 0 32 32">
                    <path
                        d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                        data-original="#ea2d3f" />
                </svg>
                <strong class="font-bold text-base">Не получилось :(</strong>
            </div>
            <span class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ $page.props.errors.title }}</span>
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-7 hover:bg-red-200 rounded-md transition-all p-2 cursor-pointer fill-green-500 absolute right-4 top-1/2 -translate-y-1/2" viewBox="0 0 320.591 320.591">

                cache
            </svg>
        </div>

        <div v-if="$page.props.errors.price" class="bg-red-100 text-red-800 pl-4 pr-10 py-4 rounded relative" role="alert">
            <div class="inline-block max-sm:mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 inline mr-4" viewBox="0 0 32 32">
                    <path
                        d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                        data-original="#ea2d3f" />
                </svg>
                <strong class="font-bold text-base">Не получилось :(</strong>
            </div>
            <span class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ $page.props.errors.price }}</span>
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-7 hover:bg-red-200 rounded-md transition-all p-2 cursor-pointer fill-green-500 absolute right-4 top-1/2 -translate-y-1/2" viewBox="0 0 320.591 320.591">

                cache
            </svg>
        </div>

        <div v-if="$page.props.errors.description" class="bg-red-100 text-red-800 pl-4 pr-10 py-4 rounded relative" role="alert">
            <div class="inline-block max-sm:mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 inline mr-4" viewBox="0 0 32 32">
                    <path
                        d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                        data-original="#ea2d3f" />
                </svg>
                <strong class="font-bold text-base">Не получилось :(</strong>
            </div>
            <span class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ $page.props.errors.description }}</span>
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-7 hover:bg-red-200 rounded-md transition-all p-2 cursor-pointer fill-green-500 absolute right-4 top-1/2 -translate-y-1/2" viewBox="0 0 320.591 320.591">

                cache
            </svg>
        </div>

        <div v-if="$page.props.errors.photo0" class="bg-red-100 text-red-800 pl-4 pr-10 py-4 rounded relative" role="alert">
            <div class="inline-block max-sm:mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 inline mr-4" viewBox="0 0 32 32">
                    <path
                        d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                        data-original="#ea2d3f" />
                </svg>
                <strong class="font-bold text-base">Не получилось :(</strong>
            </div>
            <span class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ $page.props.errors.photo0 }}</span>
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-7 hover:bg-red-200 rounded-md transition-all p-2 cursor-pointer fill-green-500 absolute right-4 top-1/2 -translate-y-1/2" viewBox="0 0 320.591 320.591">

                cache
            </svg>
        </div>

        <div v-if="$page.props.errors.photo1" class="bg-red-100 text-red-800 pl-4 pr-10 py-4 rounded relative" role="alert">
            <div class="inline-block max-sm:mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 inline mr-4" viewBox="0 0 32 32">
                    <path
                        d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                        data-original="#ea2d3f" />
                </svg>
                <strong class="font-bold text-base">Не получилось :(</strong>
            </div>
            <span class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ $page.props.errors.photo1 }}</span>
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-7 hover:bg-red-200 rounded-md transition-all p-2 cursor-pointer fill-green-500 absolute right-4 top-1/2 -translate-y-1/2" viewBox="0 0 320.591 320.591">

                cache
            </svg>
        </div>

        <div v-if="$page.props.errors.photo2" class="bg-red-100 text-red-800 pl-4 pr-10 py-4 rounded relative" role="alert">
            <div class="inline-block max-sm:mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 inline mr-4" viewBox="0 0 32 32">
                    <path
                        d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                        data-original="#ea2d3f" />
                </svg>
                <strong class="font-bold text-base">Не получилось :(</strong>
            </div>
            <span class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1">{{ $page.props.errors.photo2 }}</span>
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-7 hover:bg-red-200 rounded-md transition-all p-2 cursor-pointer fill-green-500 absolute right-4 top-1/2 -translate-y-1/2" viewBox="0 0 320.591 320.591">

                cache
            </svg>
        </div>


    </div>
    <div>
        <div class="flex items-center mb-8">
            <div class="my-6 mx-auto max-w-xl bg-white font-[sans-serif]">
                <h1 class="text-3xl text-[#333] font-extrabold text-center">Добавить объявление</h1>
                <form class="mt-8 space-y-4">
                    <input v-model="title"
                           type='text'
                           placeholder='Название'
                           class="w-full rounded-md py-3 px-4 bg-gray-100 text-sm outline-blue-500" />
                    <input v-model="price"
                           type='text'
                           placeholder='Цена'
                           class="w-full rounded-md py-3 px-4 bg-gray-100 text-sm outline-blue-500" />
                    <textarea v-model="description"
                              placeholder='Описание'
                              rows="6"
                              class="w-full rounded-md px-4 bg-gray-100 text-sm pt-3 outline-blue-500">
                    </textarea>
                    <div>
                        <input v-model="photo0"
                               type='text'
                               placeholder='Ссылка'
                               class="w-full rounded-md py-3 px-4 bg-gray-100 text-sm outline-blue-500" />
                    </div>
                    <div v-if="photo0.length">
                        <input v-model="photo1"
                               type='text'
                               placeholder='Ссылка'
                               class="w-full rounded-md py-3 px-4 bg-gray-100 text-sm outline-blue-500" />
                    </div>
                    <div v-if="photo1.length > 0">
                        <input v-model="photo2"
                               type='text'
                               placeholder='Ссылка'
                               class="w-full rounded-md py-3 px-4 bg-gray-100 text-sm outline-blue-500" />
                    </div>
                    <button @click.prevent="store" type='button'
                            class="text-white bg-blue-500 hover:bg-blue-600 font-semibold rounded-md text-sm px-4 py-3 w-full">Send</button>
                </form>
            </div>

        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/vue3";
import AdvertLayout from "@/Layouts/AdvertLayout.vue";

export default {
    name: "Create",

    layout: AdvertLayout,

    components: {
        Link
    },

    props: [
        'edit_url'
    ],

    data() {
        return {
            title: '',
            description: '',
            price: '',
            photo0: '',
            photo1: '',
            photo2: '',
            errors: '',
        }
    },

    methods: {
        store() {
            this.$inertia.post(this.edit_url, {
                'title': this.title,
                'description': this.description,
                'price': this.price,
                'photo0': this.photo0,
                'photo1': this.photo1,
                'photo2': this.photo2,
            })
        },
    },

}
</script>

<style scoped>

</style>
