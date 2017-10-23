<template>
<div class="addauthor">
  <div class="add">
    <div class="lbl_add">Author add form</div>
      <p class="bg-danger" id="err" style="width: 100%">{{err_author}}</p>
      <div class="form-group">
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="inputName" placeholder="Enter name" v-model="name">
      </div>
      <div class="form-group">
        <label for="inputSname">Surname</label>
        <input type="text" class="form-control" id="inputSname" placeholder="Enter surname" v-model="surname">
      </div>
      <button  class="btn btn-primary">Add author</button>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'addAuthor',
  data () {
    return {
      err_author: "",
      name: "",
      surname: ""
    }
  },
  created(){
   
  },
  methods:{
   
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
