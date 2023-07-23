<template>

    <div class="row login-section">
        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <div class="alert alert-danger" v-if="error">
            <p>There was an error, unable to sign in with those credentials.</p>
            </div>
            <form autocomplete="off" @submit.prevent="login" method="post">
                <div class="card card-login">
                    <div class="card-header card-header-rose text-center">
                        <h4 class="card-title">Login</h4>
                        <div class="social-line">
                            <a href="javascript:void(0);" class="btn btn-white">
                                <img src="assets/img/web-logo.png" width="125">
                            </a>
                        </div>
                    </div>
                    <div class="card-body mt-3">
                        <div class="form-group">
                            <label for="email" class="bmd-label-floating">E-mail</label>
                            <input type="email" id="email"
                                   class="form-control"
                                   pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}"
                                   title="Invalid email address" autocomplete="off" v-model="email" required />
                        </div>
                        <div class="form-group mt-3">
                            <label for="password" class="bmd-label-floating">Password</label>
                            <input type="password" id="password" class="form-control" autocomplete="off"
                                   v-model="password" required />
                        </div>
                    </div>
                    <div class="card-footer d-inline-block text-center">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--<div class="row">-->
        <!--<div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">-->
            <!--<div class="alert alert-danger" v-if="error">-->
                <!--<p>There was an error, unable to sign in with those credentials.</p>-->
            <!--</div>-->
            <!--<form autocomplete="off" @submit.prevent="login" method="post">-->
                <!--<div class="card card-login">-->
                    <!--<div class="card-body">-->
                        <!--<div class="form-group">-->
                            <!--<label for="email">E-mail</label>-->
                            <!--<input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                            <!--<label for="password">Password</label>-->
                            <!--<input type="password" id="password" class="form-control" v-model="password" required>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="card-footer">-->
                        <!--<button type="submit" class="btn btn-primary">Sign in</button>-->
                    <!--</div>-->
                <!--</div>-->

            <!--</form>-->
        <!--</div>-->

    <!--</div>-->
</template>
<script>
    export default {
        data(){
            return {
                email: null,
                password: null,
                error: false
            }
        },

        methods: {
            login(){
                var app = this
                this.$auth.login({
                    params: {
                        email: app.email,
                        password: app.password
                    },
                    success: function () {},
                    error: function () {},
                    rememberMe: true,
                    redirect: '/dashboard',
                    fetchUser: true,
                });
            },
        }
    }
</script>
