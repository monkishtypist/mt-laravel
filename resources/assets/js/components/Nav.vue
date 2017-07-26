<template>
    <div id="nav" v-bind:class="classObject">
        <div id="nav-toggle" v-on:click="toggleNav">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="wrapper">
            <ul>
                <li class="outside"><a v-on:click.prevent="changeView('home')" href="#">Home</a></li>
                <li class="anaglyph-dark"><i><a v-on:click.prevent="changeView('about')" href="#">About</a></i></li>
                <li><a v-on:click.prevent="changeView('work')" href="#">Work</a></li>
                <li><a href="https://github.com/monkishtypist/" class="" target="_blank"><img src="../../images/GitHub-Mark-Light-64px.png" alt="GitHub" class=""></a></li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                isActive: false,
                error: null
            }
        },
        computed: {
            classObject() {
                return {
                    'active': this.isActive && !this.error,
                    'text-danger': this.error && this.error.type === 'fatal'
                }
            }
        },
        methods: {
            toggleNav() {
                this.isActive = !this.isActive
            },
            changeView(view) {
                this.$emit('change-view', view),
                this.toggleNav(),
                console.log(view)
            }
        },
        mounted() {
            console.log('Nav component mounted.')
        }
    }
</script>

<style>

</style>
