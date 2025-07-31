<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { route } from 'ziggy-js';
import { ref } from 'vue';

const newTitle = ref()
const newContent = ref()
</script>

<template>
<p>Inertiaテスト</p>
<br>
<a href="/">aタグ</a><br>
<Link href="/">link</Link><br>
<Link :href="route('inertia.index')">名前付きルートの確認</Link> <br>
<Link :href="route('inertia.show',{id:1})">Linkルートの確認</Link>

<div class="mb-8"></div>
<input type="text" nmae="newTitle" v-model="newTitle">{{ newTitle }}<br>
<input type="text" nmae="newContent" v-model="newContent">{{ newContent }}<br>
<Link as="button" method="post" :href="route('inertia.store')"
:data="{
    title: newTitle,
    content: newContent
}">DB保存</Link>


</template>