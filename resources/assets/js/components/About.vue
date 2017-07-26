<template>
    <div class="container-fluid">
        <header class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center anaglyph"><i>About Monkish Typist</i></h1>
                </div>
            </div>
        </header>
        <section class="container skillz">
            <div class="row soft-skills justify-content-start">
                <div class="col-6 content">
                    <h2 class="anaglyph-dark">Soft skills</h2>
                    <ul class="list-inline">
                        <li class="list-inline-item" v-for="skill in skills.soft">{{ skill }}.</li>
                    </ul>
                </div>
            </div>
            <div class="row hard-skills justify-content-end">
                <div class="col-6 content">
                    <h2 class="anaglyph-dark">Hard skills</h2>
                    <ul class="list-inline">
                        <li class="list-inline-item" v-for="skill in skills.hard">{{ skill }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="container pic">
            <div class="row">
                <div class="col">
                    <!-- image background -->
                </div>
            </div>
        </section>
        <section class="container about">
            <div class="row">
                <div class="col">
                    <h2>About paragraph</h2>
                    <p>An amazing backend developer, that's who! Tim has been developing web applications and custom integrations for nearly a decade. Self-taught, self-motivated, and self-sufficient!</p>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                skills: {
                    soft: [ 'Team leadership', 'Problem solving', 'Self starter', 'Critical thinking' ],
                    hard: [ 'PHP', 'Laravel', 'Vue', 'Angular', 'jQuery', 'HTML5', 'CSS3', 'MySQL', 'PostgreSQL', 'Git', 'SVN', 'Google Analytics', 'WordPress', 'Drupal', 'APIs', 'JIRA', 'Agile' ]
                }
            }
        },
        mounted() {
            console.log('About component mounted.')
        }
    }
</script>

<style>

</style>
