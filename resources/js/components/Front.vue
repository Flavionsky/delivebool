<template>
    <div class="container" :class="{'loading': loading}">
        <div class="row">
            <div class="col-lg-3 mb-4">
                <ul>
                    <span class="form-check" :key="type.id" v-for="type in types">
                        <li :class="{backgroundColor:(selected.typesClick.includes(type.id))}">
                            <label class="form-check-label" :for="type">
                                <input class="form-check-input" type="checkbox" :value="type.id" v-model="selected.typesClick">
                                {{ type.name }}
                            </label>
                        </li>
                    </span>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="categorie-box-main">
                    <div v-if="!selected.typesClick.length">
                    </div>
                    <div v-else class="categorie-box-main-2">
                        <div class="col-lg-4 col-md-6 mb-4" :key="restaurant.id" v-for="restaurant in restaurants">
                            <a :href="'/restaurants/'+ restaurant.id">
                                <div class="card h-100">
                                        <img class="card-img-top" :src="'http://127.0.0.1:8000/' + restaurant.image" alt="ristorante">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <h1>{{ restaurant.name }}</h1>
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                types: [],
                restaurants: [],
                query: '',
                restaurant: [],
                loading: true,
                selected: {
                    typesClick: []
                }
            }
        },


        mounted() {
            this.loadTypes();
            this.loadRestaurants();
        },
        watch: {
            selected: {
                handler: function () {
                    this.loadTypes();
                    this.loadRestaurants();
                },
                deep: true
            }
        },
        methods: {
            loadTypes: function () {
                axios.get('/api/types', {
                        params: _.omit(this.selected, 'types')
                    })
                    .then((response) => {
                        this.types = response.data.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            loadRestaurants: function () {
                axios.get('/api/restaurants', {
                        params: this.selected
                    })
                    .then((response) => {
                        this.restaurants = response.data.data;
                        this.loading = false;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },

        }
    }
</script>
