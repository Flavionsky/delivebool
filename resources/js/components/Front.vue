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
                    <div v-else>
                        <div class="col-lg-4 col-md-6 mb-4" :key="restaurant.id" v-for="restaurant in restaurants">
                            <div class="card h-100">
                                <a href="#">
                                    <img class="card-img-top" src="http://placehold.it/700x400" alt="">
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <h1>{{restaurant.id}}</h1>
                                        <a href="#">{{ restaurant.name }}</a>
                                    </h4>
                                </div>
                            </div>
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
            }
        }
    }
</script>
