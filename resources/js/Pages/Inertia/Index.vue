<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { route } from 'ziggy-js';
defineProps({
    blogs: Array
})
</script>

<template>
    <ul>
        <li v-for="blog in blogs" :key="blog.id">
            タイトル<Link class="text-blue-400" 
            :href="route('inertia.show',{id: blog.id})">{{ blog.title }}</Link>
            内容{{ blog.content }}
        </li>
    </ul>
    <div v-if="$page.props.flash.message" class="bg-blue-300">
        {{ $page.props.flash.message }}
    </div>
</template>