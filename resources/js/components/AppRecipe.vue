<template>
    <div class="container">
        <div class="row recipe-row">
            <div class="recipe-card col-12">
                <h2>{{recipe.title}}</h2>
                <img v-bind:src="recipe.image_url" alt="image" width="50%">
                <div class="desc">
                    <hr>
                    <p> 
                        {{ recipe.description }} 
                    </p>
                    <hr>
                </div>
                <h3>Ингредиенты</h3>
                <p>
                    {{ recipe.ingredients }} 
                </p>
                <h3>Время приготовления</h3>
                <p>
                    {{ recipe.cooking_time }} 
                </p>
                <h3>Инструкция приготовления </h3>
                <p>
                    {{ recipe.cooking }} 
                </p>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    data: function() {
        return {
            recipe: {},
        }
    },
    mounted: function () {
        axios
        .get('http://91.78.225.177:3000/api/show/' + this.$route.params.id)
        .then(response => { 
            this.recipe = response.data;
            if (this.recipe == 'NULL') {
                window.location = "/";
            } else {
                console.log('Got recipe');
            }
        });
    }
  }
</script>