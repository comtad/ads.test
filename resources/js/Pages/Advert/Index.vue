<template>

    <div>
        <div class="flex items-center mb-8 mt-10">
            <h3 class="text-xl mr-4">Sort:</h3>
            <a @click.prevent="getHighToLowPrice" href="#" class="block w-1/6 mr-4 px-2 py-1 bg-white border border-gray-300 rounded-lg text-center">Price: ↑</a>
            <a @click.prevent="getLowToHighPrice" href="#" class="block w-1/6 mr-4 py-1 bg-white border border-gray-300 rounded-lg text-center">Price: ↓</a>
            <a @click.prevent="getNewToOldDate" href="#" class="block w-1/6 mr-4 px-2 py-1 bg-white border border-gray-300 rounded-lg text-center">Date: ↑</a>
            <a @click.prevent="getOldToNewDate" href="#" class="block w-1/6 mr-4 py-1 bg-white border border-gray-300 rounded-lg text-center">Date: ↓</a>
        </div>

        <div class="flex items-center mb-8">

            <div class="font-sans bg-gray-100 px-4 py-8">
                <!-- card -->
                <div class="mx-auto lg:max-w-6xl md:max-w-4xl">
                    <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-12">Top Products</h2>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">

                        <div v-for="advert in adverts" class="bg-white p-2 cursor-pointer hover:scale-[1.03] transition-all">
                            <Link :href="route('advert.show',advert.id)">
                                <div class="w-full h-[150px] overflow-hidden mx-auto aspect-w-16 aspect-h-8">
                                    <h3 class="text-sm font-semibold text-[#333]">{{ advert.time}}</h3>
                                    <img :src="advert.image.link" alt="product1"
                                         class="h-full w-full object-contain" />
                                </div>
                                <div class="text-center mt-4">
                                    <h3 class="text-sm font-semibold text-[#333]">{{ advert.title }}</h3>
                                    <h4 class="text-lg text-gray-800 font-bold mt-2">{{ advert.price }} ₽</h4>
                                </div>
                            </Link>
                        </div>


                    </div>
                </div>

                <!-- paginate -->
                <ul class="flex mx-auto border-2 divide-x-2 w-max mt-8">

                    <li v-if="pagination.current_page !== 1"
                        class="flex items-center justify-center shrink-0 hover:bg-gray-50 cursor-pointer w-12 h-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-gray-400" viewBox="0 0 55.753 55.753">
                            <a @click.prevent="getAdverts(pagination.current_page - 1)" href="#">>
                            <path
                                d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
                                data-original="#000000" />
                            </a>
                        </svg>
                    </li>


                    <div v-for="link in pagination.links">
                        <template v-if="Number(link.label)">
                            <li
                                :class="link.active ? 'flex items-center justify-center shrink-0 bg-blue-500 cursor-pointer text-base font-bold text-white w-12 h-10' :
                                            'flex items-center justify-center shrink-0 hover:bg-gray-50 cursor-pointer text-base font-bold text-[#333] w-12 h-10'">
                                    <a @click.prevent="getAdverts(link.label)" href="#">
                                        {{link.label}}
                                    </a>
                            </li>
                        </template>
                    </div>

                    <li v-if="pagination.current_page !== pagination.last_page"
                        class="flex items-center justify-center shrink-0 hover:bg-gray-50 cursor-pointer w-12 h-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-gray-400 rotate-180" viewBox="0 0 55.753 55.753">
                            <a @click.prevent="getAdverts(pagination.current_page + 1)" href="#">>
                            <path
                                d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
                                data-original="#000000" />
                            </a>
                        </svg>
                    </li>
                </ul>

            </div>



        </div>
    </div>

</template>

<script>
import {Link} from "@inertiajs/vue3";
import AdvertLayout from "@/Layouts/AdvertLayout.vue";

export default {
    components: {
        Link
    },

    mounted() {
        this.getAdverts()
    },

    layout: AdvertLayout,
    name: "Index",


    data() {
        return {
            adverts: '',
            pagination: [],
            high_to_low_price: false,
            low_to_high_price: false,
            new_to_old_date: false,
            old_to_new_date: false

        }
    },

    methods: {
        getAdverts(page = 1) {
            axios.post('api/get-adverts', {
                'high_to_low_price': this.high_to_low_price,
                'low_to_high_price': this.low_to_high_price,
                'new_to_old_date': this.new_to_old_date,
                'old_to_new_date': this.old_to_new_date,
                'page': page
            }).then(res => {
                this.adverts = res.data.data
                this.pagination = res.data.meta
                console.log(res);
            })
        },
        getHighToLowPrice() {
            this.high_to_low_price = true
            this.low_to_high_price = false
            this.new_to_old_date = false
            this.old_to_new_date = false
            this.getAdverts()
        },
        getLowToHighPrice() {
            this.high_to_low_price = false
            this.low_to_high_price = true
            this.new_to_old_date = false
            this.old_to_new_date = false
            this.getAdverts()
        },
        getNewToOldDate() {
            this.high_to_low_price = false
            this.low_to_high_price = false
            this.new_to_old_date = true
            this.old_to_new_date = false
            this.getAdverts()
        },
        getOldToNewDate() {
            this.high_to_low_price = false
            this.low_to_high_price = false
            this.new_to_old_date = false
            this.old_to_new_date = true
            this.getAdverts()
        }

    },

}
</script>

<style scoped>

</style>
