<script setup>
import { Inertia } from '@inertiajs/inertia'
defineProps({
    id:String, blog: Object
})

const deleteConfirm = id => {
    Inertia.delete(`/inertia/${id}`,{
        onBefore: () => confirm('本当に削除しますか？')
    })
}

</script>

<template>
    id:  {{ id }} <br>
    blogid:  {{ blog.id }} <br>
    blog:title  {{ blog.title }} <br>
    <button class="text-blue-400" @click="deleteConfirm(blog.id)">削除</button>
</template>