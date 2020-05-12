<template>
    <div method="POST">
        <h1>References</h1>
        <button class="btn btn-primary" type="button" @click="addReferences">Add More</button>
        <template id="referenceForm">
            <div v-for="(rf, index) in references">
                <button class="btn btn-danger float-right" type="button" @click="removeReferences(index)" :key="index">X</button>
                <div class="form-group">
                    <label for="formGroupExampleInput">Name:</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Enter name"
                        v-model="rf.name"
                    />
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email:</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter email"
                        v-model="rf.email"
                    />
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Contact:</label>
                    <input
                        type="text"
                        name="contact"
                        class="form-control"
                        placeholder="Enter contact"
                        v-model="rf.contact"
                    />
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Designation:</label>
                    <input
                        type="text"
                        name="designation"
                        class="form-control"
                        placeholder="Enter designation"
                        v-model="rf.designation"
                    />
                </div>
            </div>
        </template>
        <button type="submit" class="btn btn-primary" @click="submit">Submit</button>
    </div>
</template>

<script>
export default {
    data: () => ({
        references: [],
    }),
    methods: {
        addReferences(){
            this.references.push({});
        },
        removeReferences(index){
            this.references.splice(index, 1);
        },
        submit(){
            axios.post('/user/references')({
                references: this.references
            })
        }
    }
};
</script>
