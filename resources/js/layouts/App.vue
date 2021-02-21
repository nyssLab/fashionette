<template>
    <div>
        <header>
            <div class="header-area">
                <div class="main-header">
                    <div class="header-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="d-flex justify-content-between align-items-center flex-sm">
                                        <div class="header-info-left d-flex align-items-center w-100">
                                            <div class="logo w-100">
                                                <router-link :to="{ name: 'home' }">
                                                    <img src="img/logo.svg" alt="Fashionette">
                                                </router-link>
                                            </div>
                                            <form action="#" class="form-box w-100" v-on:submit="searchTvShows()"
                                                  v-on:submit.prevent>
                                                <input type="text" v-model="query"
                                                       placeholder="Search for a Tv Show">
                                                <div class="search-icon" v-on:click="searchTvShows()">
                                                    <i class="ti-search"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom  header-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-12">

                                    <div class="logo2 w-100">
                                        <router-link :to="{ name: 'home' }">
                                            <img src="img/logo.svg" alt="Fashionette">
                                        </router-link>
                                    </div>

                                    <div class="main-menu text-center d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li>
                                                    <router-link
                                                        :to="{ name: 'home' }">
                                                        Home
                                                    </router-link>
                                                </li>
                                                <li>
                                                    <router-link
                                                        :to="{ name: 'about' }">
                                                        About us
                                                    </router-link>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="mobile_menu d-block d-lg-none">
                                        <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button"
                                                                      tabindex="0"
                                                                      class="slicknav_btn slicknav_collapsed"
                                                                      style="outline: none;"><span
                                            class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span
                                            class="slicknav_icon-bar"></span><span
                                            class="slicknav_icon-bar"></span><span
                                            class="slicknav_icon-bar"></span></span></a>
                                            <ul class="slicknav_nav slicknav_hidden" style="display: none;"
                                                aria-hidden="true" role="menu">
                                                <li>
                                                    <router-link
                                                        role="menuitem"
                                                        tabindex="-1"
                                                        :to="{ name: 'home' }">
                                                        Home
                                                    </router-link>
                                                </li>
                                                <li>
                                                    <router-link
                                                        role="menuitem"
                                                        tabindex="-1"
                                                        :to="{ name: 'about' }">
                                                        About us
                                                    </router-link>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container mt-5">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import router from '../router';

    export default {
        data() {
            return {
                query: null,
                searchResult: []
            };
        },
        watch: {
            $route() {
                $("#navbarCollapse").collapse("hide");
            },
        },
        methods: {
            searchTvShows() {
                router.push({path: 'search', query: {q: this.query}})
            },
        },
    };
</script>
