<template>
    <div>
    <div class="col-md-12">
        <div class="col-md-6"> 
            <p v-if="allerros.name" :class="['label label-danger error-message', allerros.name ? 'has-error' : '']" >{{ allerros.name[0] }}</p>
            <p v-if="success" :class="['label label-success success-message', success ? 'has-success' : '']">Name successfully Added</p>  
        <form class="form-inline form-main" ref="itemform" @submit.prevent="addItem"> 
            <div class="form-group">
            <input type="text" v-model="item.name" class="form-control" id="name" placeholder="Enter Name">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    <div class="col-md-10 mt-20">
    
    <mover 
     target-id="MyMover"
     :left-items="unselectedItems"
     :right-items="selectedItems"
     title-left="Available Items"
     title-right="Selected Items"
     moved-item-location="top | bottom"
     >
    </mover>
        
    </div>
</div>
</template>
<script>
    export default {
        data() {
            return {
                selectedItems: [],
                unselectedItems: [],
                allerros: [],
                success: false,
                item: {}
                
            }
        },
        created() {
            let self = this;
            self.axios
                .get('/item')
                .then(response => {
                    console.log(response.data);
                    response.data.available.forEach(function (available) {
                        self.unselectedItems.push(available)
                    })
                    response.data.selected.forEach(function (selected) {
                        self.selectedItems.push(selected)
                    })
                });
        },
        methods: {
            addItem() {
                let self = this;
                axios.post('/item', this.item).then( response => {
                   //console.log(response);
                   self.allerros = [];
                   self.success = true;
                   response.data.forEach(function (data) {
                        self.unselectedItems.push(data);

                    });
                  this.item.name = "";
               } ).catch((error) => {
                        this.allerros = error.response.data.errors;
                        this.success = false;
                   });
            }
        }
    }
</script>