<script setup>
defineEmits(['update:modelValue'])
</script>

<template>
    <input  @input="$emit('update:modelValue', $event.target.value)">
</template>