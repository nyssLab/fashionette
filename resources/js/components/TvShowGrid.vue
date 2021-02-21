<template>
    <div class="col-lg-3 col-md-12 col-sm-6 grid-display" v-bind:key="tvShow.id">
        <div class="properties pb-30">
            <div class="properties-card">
                <router-link :to="{ name: 'item', params: { id: tvShow.id }}">
                    <div class="properties-img">
                        <img :src="tvShow.image.medium" :alt="tvShow.name">
                    </div>
                    <div class="properties-caption properties-caption2">
                        <h3>{{ tvShow.name }}</h3>
                        <p>{{ tvShow.language }}</p>
                        <div class="properties-footer d-flex justify-content-between align-items-center">
                            <div class="review">
                                <p><a :href="'https://www.imdb.com/title/' + tvShow.externals.imdb" class="text-dark"
                                      target="_blank">IMDB</a></p>
                            </div>
                            <div class="price text-dark" v-if="tvShow.rating.average">
                                <span>{{ tvShow.rating.average }}</span> /10
                            </div>
                        </div>
                    </div>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'TvShowGrid',
        props: ['tvShow'],
    }
</script>
