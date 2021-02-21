<template>
    <div class="row" v-if="tvShow">
        <div class="col-md-6">
            <img v-if="tvShow.image" :src="tvShow.image.original" :alt="tvShow.name" class="img-fluid">
            <img v-else src="img/not-found.png" alt="image not found" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>{{ tvShow.name }}</h1>
            <p v-html="tvShow.summary"></p>

            <h3 class="mt-5">Genres:</h3>
            <ul>
                <li v-for="genre in tvShow.genres">
                    {{ genre }}
                </li>
            </ul>
        </div>
    </div>
    <div v-else>
        Loading...
    </div>
</template>

<script>
    import axios from 'axios'
    import { API_BASE_URL } from '../config'

    export default {
        data() {
            return {
                tvShow: null,
            }
        },
        created () {
            axios.get(API_BASE_URL + '/shows/' + this.$route.params.id)
                .then(response => {
                    this.tvShow = response.data
                })
                .catch(error => {});
        }
    }
</script>
