<template>
    <div>
        <div class="row">
            <div class="btn-group ml-auto btn-group-sm display-group" role="group">
                <button
                    @click="changeDisplayMode('grid')"
                    type="button"
                    class="btn btn-danger"
                    v-bind:class="{ active: displayMode === 'grid' }"
                >
                    <i class="ti-view-grid"></i>
                </button>
                <button
                    @click="changeDisplayMode('list')"
                    type="button"
                    class="btn btn-danger"
                    v-bind:class="{ active: displayMode === 'list' }"
                >
                    <i class="ti-view-list-alt"></i>
                </button>
            </div>
        </div>

        <div class="best-selling">
            <div>
                <div class="row" v-if="displayMode === 'grid'">
                    <TvShowGrid
                        v-for="tvShow in tvShows"
                        v-bind:key="tvShow.id"
                        v-bind:tvShow="tvShow"
                    ></TvShowGrid>
                </div>
                <template v-else>
                    <TvShowList
                        v-for="tvShow in tvShows"
                        v-bind:key="tvShow.id"
                        v-bind:tvShow="tvShow"
                    ></TvShowList>
                </template>
            </div>
            <div id="loading" v-if="isLoading"><h1 class="text-center">Loading...</h1></div>
        </div>

    </div>
</template>

<script>
    import TvShowGrid from '../components/TvShowGrid'
    import TvShowList from '../components/TvShowList'
    import axios from "axios";
    import {API_BASE_URL} from "../config";

    export default {
        name: 'TvShowsListing',
        props: ['url'],
        components: {
            TvShowGrid,
            TvShowList,
        },
        data() {
            return {
                displayMode: 'grid',
                lastId: 0,
                isLoading: true,
                tvShows: [],
            }
        },
        async created() {
            await this.loadTvShows()
        },
        methods: {
            changeDisplayMode(displayMode) {
                this.displayMode = displayMode;
            },
            handleScroll() {
                window.onscroll = () => {
                    let bottomOfWindow = document.documentElement.offsetHeight - (parseInt(document.documentElement.scrollTop + window.innerHeight)) < 10
                    if (bottomOfWindow) {
                        this.loadTvShows()
                    }
                }
            },
            async loadTvShows() {
                this.isLoading = true
                const response = await axios.get(API_BASE_URL + '/' + this.url + 'lastId=' + this.lastId)
                if (response.data.length > 0 && response.data[response.data.length - 1].id !== this.lastId) {
                    this.tvShows = this.tvShows.concat(response.data)
                    this.lastId = this.tvShows[this.tvShows.length - 1].id
                }
                this.isLoading = false

            },
        },
        mounted() {
            this.handleScroll()
        },
        watch: {
            url: function() {
                this.tvShows = []
                this.loadTvShows()
            }
        }
    }
</script>
