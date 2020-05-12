<template>
    <div class="container mb-5">
        <button class="btn btn-sm btn-success  mb-3" type="button" @click="addSocialLink">Add More</button>
        <h2>social Links</h2>
        <div id="socialForm">
            <template v-for="(sl, index) in socialLinks">
                    <button class="float-right btn-danger" type="button" @click="removeLink(index)" :key="index">X</button>
                    <div class="form-group">
                        <label for="socialName">Social link name</label>
                        <input type="text" class="form-control" id="socialName" name="name[]" placeholder="enter your url" v-model="sl.name">
                    </div>
                    <div class="form-group">
                        <label for="">Link:</label>
                        <input type="url" class="form-control" id="link" placeholder="link" name="link[]" v-model="sl.url">
                    </div>
            </template>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</template>
<script>
    export default {
        data: () => ({
            socialLinks:[]
        }),
        methods:{
            addSocialLink(){
               this.socialLinks.push({})
            },
            removeLink(index){
                this.socialLinks.splice(index,1);
            }
        }
    }
</script>
