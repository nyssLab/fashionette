<template>
    <article class="list-display mb-5 properties" v-bind:key="tvShow.id">
        <div class="properties-card">
            <div class="properties-caption properties-caption2">
                <router-link :to="{ name: 'item', params: { id: tvShow.id }}">
                    <div class="row">
                        <div class="col-md-3 col-lg-2">
                            <img v-if="tvShow.image" :src="tvShow.image.medium" :alt="tvShow.name"  class="img-fluid">
                            <img v-else src="img/not-found.png" alt="image not found"  class="img-fluid">
                        </div>
                        <div class="col-md-9 col-lg-10 p-5">
                            <h2>{{ tvShow.name }}</h2>
                            <p>{{ tvShow.language }}</p>
                            <div class="properties-footer d-flex justify-content-between align-items-center">
                                <div class="review">
                                    <div class="price text-dark" v-if="tvShow.rating.average">
                                        <span>{{ tvShow.rating.average }}</span> /10
                                    </div>
                                    <p><a :href="'https://www.imdb.com/title/' + tvShow.externals.imdb"
                                          class="text-dark" target="_blank">IMDB</a></p>
                                </div>
                                <a class="btn btn-light float-right" :href="tvShow._links.self.href">Watch</a>
                            </div>
                        </div>
                    </div>
                </router-link>
            </div>
        </div>
    </article>
</template>

<script>
    export default {
        name: 'TvShowList',
        props: ['tvShow'],
    }
</script>
