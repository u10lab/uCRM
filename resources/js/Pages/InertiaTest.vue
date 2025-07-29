<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { route } from 'ziggy-js';
</script>

<template>
<p>Inertiaテスト</p>
<br>
<a href="/">aタグ</a><br>
<Link href="/">link</Link><br>
<Link :href="route('inertia.index')">名前付きルートの確認</Link>
</template>