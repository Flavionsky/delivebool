<template>
    <div class="container" :class="{'loading': loading}">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Shop Catalog</h1>
                <div class="list-group">
                    <a class="list-group-item" v-for="type in types">
                        {{ type.name }}
                    </a>
                </div>

            </div>
            <div class="col-lg-9">
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-6 mb-4" v-for="food in foods">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top" v-bind:src="food.image" alt="Food">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{ food.name }}</a>
                                </h4>
                                <h5>$ {{ food.price }}</h5>
                                <p class="card-text">{{ food.description }}</p>
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
                foods: [],
                loading: true
            }
        },
        mounted() {
            this.loadTypes();
            this.loadFoods();
        },
        methods: {
            loadTypes: function () {
                axios.get('/api/types')
                    .then((response) => {
                        this.types = response.data.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            loadFoods: function () {
                axios.get('/api/foods')
                    .then((response) => {
                        this.foods = response.data.data;
                        this.loading = false;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>