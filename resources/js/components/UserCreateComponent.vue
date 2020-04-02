<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Edit <b>{{PlaceId}}</b>
          </div>
          <div class="card-body">
            <form @submit="edit()" method="post">
              <div class="form-group">
                <label for="">Name</label>
                <input v-model="CountryName" type="text" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Position</label>
                <input v-model="position" type="text" autocomplete="off" class="form-control">
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
        PlaceId:'',
        PlaceName:'',
        CountryId:'',
        CountryName:''

    }
  },
  methods:{
    getEmploye(){
      axios.get('/api/flights/mm/places/'+this.$route.params.id).then(response => {
        this.PlaceId = response.data.PlaceId;
        this.PlaceName = response.data.PlaceName;
        this.CountryId = response.data.CountryId;
        this.CountryName = response.data.CountryName;
      });
    },
    // edit(){
    //   axios.put('/api/flights/mm/places/'+this.$route.params.id, {
    //     name: this.name,
    //     pos: this.pos,
    //   }).then(response => {
    //     this.$route.employe;
    //   });
    // }
  },
  created(){
    this.getEmploye();
  }
}