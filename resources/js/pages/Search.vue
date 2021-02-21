<template>
    <TvShowsListing
        v-bind:tvShows="tvShows"
        v-bind:isLoading="isLoading"
    ></TvShowsListing>
</template>

<script>
    import axios from 'axios'
    import TvShowsListing from '../components/TvShowsListing'
    import { API_BASE_URL } from '../config'

    export default {
        components: {
            TvShowsListing,
        },
        data() {
            return {
                isLoading: true,
                tvShows: {},
                query: null,
            }
        },
        beforeRouteUpdate (to, from, next) {
            this.search(to.query.q)
            next()
        },
        created () {
           this.search()
        },
        methods: {
            search (query = this.$route.query.q) {
                axios.get(API_BASE_URL + '/shows/search?q=' + query)
                    .then(response => {
                        this.tvShows = response.data
                        this.isLoading = false
                    })
                    .catch(error => {
                        this.isLoading = false
                    });
            }
        }
    }
</script>
