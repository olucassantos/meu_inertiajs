<template>
    <layout>
        <h1>Olá {{ user }} eu sou a home no vuejési</h1>
    </layout>
</template>

<script>
import Layout from '../Layout.vue'

export default {
  components: { Layout },
    name: 'Home',
    props: {
        user: String
    }
}
</script>

<style>

</style>
