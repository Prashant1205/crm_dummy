<template>
<div class="wrapper ">
    <div>
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top "  v-if="$auth.check()" >
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#">Agent Dashboard<div class="ripple-container"></div></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            <span class="notification">3</span>
                            <p class="d-lg-none d-md-block">
                                Some Actions
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">You have 5 new tasks</a>
                            <a class="dropdown-item" href="#">Another Notification</a>
                            <a class="dropdown-item" href="#">Another One</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                            <p class="d-lg-none d-md-block">
                                Account
                            </p>
                            <div class="ripple-container"></div></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <a class="dropdown-item" href="#" ><router-link :to="{ name: 'home' }">Home</router-link></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><router-link :to="{ name: 'listuser' }">User List</router-link></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><router-link :to="{ name: 'escalation' }">Escalation List</router-link></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" @click.prevent="$auth.logout()">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">-->
    <!--<div class="navbar-wrapper">-->
        <!--<div class="collapse navbar-collapse justify-content-end">-->
                <!--<ul class="navbar-nav">-->
                    <!--<li v-if="$auth.check()" class="nav-item">-->
                        <!--<router-link :to="{ name: 'home' }">Home</router-link>-->
                    <!--</li>-->
                    <!--&lt;!&ndash;<li v-if="!$auth.check()" class="pull-right">&ndash;&gt;-->
                        <!--&lt;!&ndash;<router-link :to="{ name: 'login' }">Login</router-link>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<li v-if="$auth.check()" class="pull-right">&ndash;&gt;-->
                        <!--&lt;!&ndash;<router-link :to="{ name: 'register' }">Register</router-link>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--<li v-if="$auth.check()" class="nav-item">-->
                        <!--<router-link :to="{ name: 'listuser' }">User List</router-link>-->
                    <!--</li>-->
                    <!--<li v-if="$auth.check()" class="nav-item">-->
                        <!--<router-link :to="{ name: 'escalation' }">Escalation List</router-link>-->
                    <!--</li>-->
                    <!--&lt;!&ndash;<li v-if="$auth.check()" class="pull-right">&ndash;&gt;-->
                    <!--&lt;!&ndash;<router-link :to="{ name: 'create' }">Create Account</router-link>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--<li v-if="$auth.check()" class="nav-item">-->
                        <!--<a href="#" @click.prevent="$auth.logout()">Logout</a>-->
                    <!--</li>-->
                <!--</ul>-->
        <!--</div>-->
    <!--</div>-->
    <!--</nav>-->
        <div class="content">
            <router-view></router-view>
        </div>
    </div>
</div>
</template>
