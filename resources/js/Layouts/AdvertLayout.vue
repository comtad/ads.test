<template>
    <div class="bg-white border-b border-gray-300 py-4">
        <div class="w-1/2 mx-auto">
            <Link href="/advert">Объявления</Link>
            <Link class="ml-4" href="/advert/create">Добавить объявление</Link>
        </div>
    </div>
    <div class="w-1/2 mx-auto py-4">
        <slot />
    </div>
</template>

<style scoped>

</style>

<script>
import {Link} from "@inertiajs/vue3";
export default {
    name: "MainLayout",
    components: {
        Link
    }
}
</script>
