<template>
    <div class="container">
        <header class="row">
            <div class="col">
                <h1>Work Page</h1>
            </div>
        </header>
        <div v-for="client in clients" class="row">
            <div class="col">
                <h2>{{ client.name }}</h2>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['view'],
        data: function() {
            return {
                clients: [
                    {
                        name: 'Portal WiFi'
                    },
                    {
                        name: 'Tritium Corporation'
                    },
                    {
                        name: 'Jacuzzi Baths'
                    }
                ]
            }
        },
        methods: {
            changeView( view ) {
                this.$emit( 'change-view', view )
            }
        },
        mounted() {
            console.log( this.view + ' component mounted.' )
        }
    }
</script>

<style>

</style>
