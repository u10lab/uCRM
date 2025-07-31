<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import Label from '@/Components/InputLabel.vue'
import Input from '/home/umeshita/project/crm-system/uCRM/resources/js/Pages/ComponentChildTest.vue'
const emitTest = e =>{
    console.log(e)
} 
</script>

<template>
<GuestLayout>
    <Label value="件名">タイトル</Label>
    <Input 
    @update:modelValue="emitTest"
    ></Input>
</GuestLayout>
</template>