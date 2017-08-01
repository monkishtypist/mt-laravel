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
            <div class="row">
                <div class="col-sm-6 row-eq-height soft-skills">
                    <h2 class="anaglyph-dark">Soft skills</h2>
                    <ul class="list-inline">
                        <li class="list-inline-item" v-for="skill in skills.soft">{{ skill }}.</li>
                    </ul>
                </div>
                <div class="col-sm-6 row-eq-height hard-skills">
                    <h2 class="anaglyph-dark">Hard skills</h2>
                    <ul class="list-inline">
                        <li class="list-inline-item" v-for="skill in skills.hard">{{ skill }}.</li>
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
            <div class="row row-eq-height">
                <div class="col-sm-6">
                    <h2 class="anaglyph">And more...</h2>
                    <p>Self-taught, self-motivated, and self-sufficient. Monkish Typist got his degree in Economics - specializing in mathematics and logic. But his work took him in a different direction, and he started in web development by learning PHP and MySQL from books and practical, hands-on experience.</p>
                </div>
                <div class="col-sm-6 outdoorsman">
                    <!-- image -->
                </div>
            </div>
            <div class="row row-eq-height">
                <div class="col-sm-6 push-sm-6">
                    <p>He has now been developing web applications and custom integrations since 2008, specializing in API integrations, back-end PHP, and custom plugin and web-application development.</p>
                </div>
                <div class="col-sm-6 fishing pull-sm-6">
                    <!-- image -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p>Not only one to work hard, Monkish Typist is also an avid outdoorsman - a backpacker, a fly-fisherman, a desert rat, a licensed boat captain, a social volunteer, and one pretty darn good cook.</p>
                </div>
                <div class="col-sm-6 sailing">
                    <!--image -->
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
                    soft: [ 'Leadership', 'Problem solving', 'Self starter', 'Critical thinking', 'Organization and Planning', 'Customer support' ],
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
