<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Edit <b>{{name}}</b>
          </div>
          <div class="card-body">
            <form @submit="edit()" method="post" onclick="return false">
              <div class="form-group">
                <label for="">Name</label>
                <input v-model="input.nameInput" type="text" value="?" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Position</label>
                <input v-model="input.posInput" value="?" type="text" autocomplete="off" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Edit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
        name:'',
        pos:'',
        input:{
          nameInput:'',
          posInput:''
        }
    }
  },
  methods:{
    getEmploye(){
      axios.get('/flights/mm/places/'+this.$route.params.id).then(response => {
        this.name = response.data.name;
        this.pos = response.data.pos;
      });
    },
    edit(){
      axios.put('/employes_api/'+this.$route.params.id, {
        name: this.name,
        pos: this.position,
      }).then(response => {
        this.$route.employe;
      });
    }
  },
  mounted(){
    this.getEmploye();
  }
}
</script>