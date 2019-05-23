<template>
    <div class="container add-recipe">
        <h2>Добавление рецепта</h2>
        <form method="POST" class="row" action="/api/add-recipe">
            <div class="form-group col-6">
                <label for="title">Название</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group col-6">
                <label for="description">Описание</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group col-6">
                <label for="image_url">Ссылка на картинку блюда</label>
                <input type="text" class="form-control" id="image_url" name="image_url">
            </div>
            <div class="form-group col-6">
                <label for="cooking_time">Время приготовления</label>
                <input type="text" class="form-control" id="cooking_time" name="cooking_time">
            </div>
            <div class="form-group col-6">
                <label for="ingredients">Игредиенты</label>
                <input type="text" class="form-control" id="ingredients" name="ingredients">
            </div>
            <div class="form-group col-6">
                <label for="cooking">Приготовление</label>
                <input type="text" class="form-control" id="cooking" name="cooking">
            </div>
            <button type="submit" class="btn btn-primary col-6">Добавить</button>
        </form>
    </div>
</template>
<script>
  export default {
    data: function() {
        return {
            arr: []
        }
    },
    mounted() {
        
    }
  }
</script>