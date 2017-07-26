<template>
    <div id="home" class="container">
        <header>
            <div class="row">
                <div class="col-xs-12 col-lg-6">
                    <h3 class="issue text-center"><span class="text-uppercase">Tim Spinks</span> <span>is</span></h3>
                </div>
                <div class="col-xs-12 col-lg-6">
                    <h3 class="issue text-center">a Web Applications Developer</h3>
                </div>
            </div>
            <div id="headline" class="row">
                <div class="col-sm-12">
                    <h1 id="top-title" class="text-center outside"><span>Monkish Typist</span></h1>
                </div>
            </div>
        </header>
        <div class="row justify-content-between">
            <div class="col-xs-12 col-md-6 col-lg-7">
                <section class="soft-skillz">
                    <h2 class="">Amazing Soft Skills!</h2>
                    <ul class="list-unstyled">
                        <li class=""><span class="hilite">Team leader</span></li>
                        <li class=""><span class="hilite">Self starter</span></li>
                        <li class=""><span class="hilite">Problem solver</span></li>
                        <li class=""><span class="hilite">Critical thinker</span></li>
                    </ul>
                </section>
                
                <section id="work">
                    <h2 class="inverse">Excellent Work!</h2>
                    <ul class="list-unstyled">
                        <li>
                            <span class="hilite">
                                <h4>Cutting Edge!</h4>
                                <h5 class="text-uppercase">Portal WiFi</h5>
                            </span>
                            <p><span class="hilite">The brand portal built on Laravel and Ghost!</span></p>
                        </li>
                        <li>
                            <span class="hilite">
                                <h4>Powerful Integrations!</h4>
                                <h5 class="text-uppercase">Tritium Corporation</h5>
                            </span>
                            <p><span class="hilite">A cyber security Web API made with Angular.</span></p>
                        </li>
                        <li>
                            <span class="hilite">
                                <h4>Totally Custom!</h4>
                                <h5 class="text-uppercase">Jacuzzi Baths</h5>
                            </span>
                            <p><span class="hilite">WordPress theming and plugin customization!</span></p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <section id="hard-skillz">
                    <h2 class="inverse">Talented Hard Skills</h2>
                    <ul class="list-unstyled">
                        <li class=""><span class="hilite">PHP, Angular, Laravel, Vue</span></li>
                        <li class=""><span class="hilite">MySQL, PostgreSQL, and other Databases</span></li>
                        <li class=""><span class="hilite">Version control: Git, SVN</span></li>
                        <li class=""><span class="hilite">Google Analytics</span></li>
                        <li class=""><span class="hilite">WordPress plugin development</span></li>
                        <li class=""><span class="hilite">Custom API integrations</span></li>
                        <li class=""><span class="hilite">And so much more...</span></li>
                    </ul>
                </section>
                <section id="about">
                    <h2>Who is this guy anyway?</h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <p><span class="hilite">An amazing backend developer, that's who! Tim has been developing web applications and custom integrations for nearly a decade. Self-taught, self-motivated, and self-sufficient!</span></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['view'],
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
