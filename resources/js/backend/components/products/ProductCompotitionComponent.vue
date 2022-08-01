<template>
    <div>
        <div class="input-group" v-cloak v-show="isEdit">
            <input type="text" class="form-control" v-model="edit_product_compotition" placeholder="Edit Product Compotition" aria-label="Product Compotition">
            <div class="input-group-append">
                <button class="btn btn-success" type="button" @click="update">Update</button>
                <button class="btn btn-danger" type="button" @click="cancelEdit">Cancel</button>
            </div>
        </div>
        <small class="text-danger">{{ errorMessageEdit && errorMessageEdit }}</small>
        <div class="input-group" v-cloak v-show="!isEdit">
            <input type="text" class="form-control" v-model="new_product_compotition" placeholder="Insert Product Compotition" aria-label="Product Compotition" aria-describedby="button-add-prod-exce">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-add-prod-exce" @click="addNew">Add</button>
            </div>
        </div>
        <small class="text-danger">{{ errorMessageAdd && errorMessageAdd }}</small>

        <div v-cloak>
            <ul class="list-group mt-3">
                <li class="list-group-item justify-content-between align-items-center" :class="compotition.id == 'deleted' ? 'd-none' : ' d-flex'" v-for="(compotition, index) in compotitions" :key="index">
                    {{ compotition.name }}
                    <input type="text" class="d-none" :name="`compotition[][${tagId(compotition.id)}]`" :value="compotition.name">
                    <div>
                        <span class="badge badge-primary badge-pill action" @click="edit(index)">Edit</span>
                        <span class="badge badge-danger badge-pill action" @click="remove(index)">Delete</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        compotitionsData: {
            type: Array,
            default: () => []
        }
    },
    mounted() {
        this.isEdit = false;
        if (this.compotitionsData.length > 0) {
            this.compotitions = this.compotitionsData;
        } else {
            this.compotitions = [];
        }
    },
    data(){
        return {
            isEdit: false,
            edit_product_compotition: '',
            new_product_compotition: '',
            compotitions: [],
            compotition_id: null,
            errorMessageAdd: null,
            errorMessageEdit: null
        }
    },
    methods: {
        addNew(){
            if(this.new_product_compotition.length > 0){
                this.compotitions.push({
                    name: this.new_product_compotition
                });
                this.new_product_compotition = '';
                this.errorMessageAdd = null;
            }else{
                this.errorMessageAdd = 'Please fill input product compotition';
            }
        },
        edit(idx){
            this.isEdit = true;
            this.edit_product_compotition = this.compotitions[idx].name;
            this.compotition_id = idx;
        },
        cancelEdit(){
            this.isEdit = false;
            this.edit_product_compotition = '';
            this.compotition_id = null;
            this.errorMessageAdd = null;
            this.errorMessageEdit = null;
        },
        update(){
            if(this.edit_product_compotition.length > 0){
                this.compotitions[this.compotition_id].name = this.edit_product_compotition;
                this.edit_product_compotition = '';
                this.compotition_id = null;
                this.isEdit = false;
                this.errorMessageEdit = null;
            }else{
                this.errorMessageEdit = 'Please fill input product compotition';
            }
        },
        remove(idx){
            this.compotitions[idx].id = 'deleted';
        },
        tagId(idx){
            if (undefined === idx) {
                return 'new';
            }
            return idx.toString().replace(/[^a-zA-Z0-9]/g, '');
        }
    }
}
</script>

<style scoped>
    .action{
        cursor: pointer;
    }
</style>
