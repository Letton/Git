<template>
    <div class="container recipes">
        <div class="row row-eq-height">
            <div class="col-md-6" v-for="recipe in recipes_arr" :key="recipe.id">
                <div class="card">
                    <img v-bind:src="recipe.image_url" class="card-img-top" alt="Recipe picture">
                    <div class="card-body">
                        <h5 class="card-title"> {{recipe.title}} </h5>
                        <p class="card-text"> {{recipe.description}} </p>
                        <router-link v-bind:to="'/recipe/' + recipe.id" class="btn btn-primary">Смотреть</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    data: function() {
        return {
            recipes_arr: [],
        }
    },
    mounted: function () {
        axios
        .get('http://91.78.225.177:3000/api/showAll')
        .then(response => { 
            this.recipes_arr = response.data.reverse();
            console.log('Got recipes');
        });
    }
  }
</script>