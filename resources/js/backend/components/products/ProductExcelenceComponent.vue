<template>
    <div>
        <div class="input-group" v-cloak v-show="isEdit">
            <input type="text" class="form-control" v-model="edit_product_excellence" placeholder="Edit Product Excelence" aria-label="Product Excelence">
            <div class="input-group-append">
                <button class="btn btn-success" type="button" @click="update">Update</button>
                <button class="btn btn-danger" type="button" @click="cancelEdit">Cancel</button>
            </div>
        </div>
        <div class="input-group" v-cloak v-show="!isEdit">
            <input type="text" class="form-control" v-model="new_product_excellence" placeholder="Insert Product Excelence" aria-label="Product Excelence" aria-describedby="button-add-prod-exce">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-add-prod-exce" @click="addNew">Add</button>
            </div>
        </div>

        <div v-cloak>
            <ul class="list-group mt-3">
                <li class="list-group-item justify-content-between align-items-center" :class="excelence.id == 'deleted' ? 'd-none' : ' d-flex'" v-for="(excelence, index) in excelences" :key="index">
                    {{ excelence.name }}
                    <input type="text" class="d-none" :name="`excelence[][${tagId(excelence.id)}]`" :value="excelence.name">
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
        excelencesData: {
            type: Array,
            default: () => []
        }
    },
    mounted() {
        this.isEdit = false;
        if (this.excelencesData.length > 0) {
            this.excelences = this.excelencesData;
        } else {
            this.excelences = [];
        }
    },
    data(){
        return {
            isEdit: false,
            edit_product_excellence: '',
            new_product_excellence: '',
            excelences: [],
            excelence_id: null
        }
    },
    methods: {
        addNew(){
            if(this.new_product_excellence.length > 0){
                this.excelences.push({
                    name: this.new_product_excellence
                });
                this.new_product_excellence = '';
            }
        },
        edit(idx){
            this.isEdit = true;
            this.edit_product_excellence = this.excelences[idx].name;
            this.excelence_id = idx;
        },
        cancelEdit(){
            this.isEdit = false;
            this.edit_product_excellence = '';
            this.excelence_id = null;
        },
        update(){
            this.isEdit = false;
            this.excelences[this.excelence_id].name = this.edit_product_excellence;
            this.edit_product_excellence = '';
            this.excelence_id = null;
        },
        remove(idx){
            this.excelences[idx].id = 'deleted';
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
