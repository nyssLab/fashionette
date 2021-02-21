<template>
    <TvShowsListing
        :url="'shows/search?q=' + urlQuery + '&'"
    ></TvShowsListing>
</template>

<script>
    import TvShowsListing from '../components/TvShowsListing'

    export default {
        components: {
            TvShowsListing,
        },
        data() {
            return {
                urlQuery: '',
            }
        },
        created() {
            this.urlQuery = this.$route.query.q
        },
        beforeRouteUpdate(to, from, next) {
            this.urlQuery = to.query.q
            next()
        },
    }
</script>
