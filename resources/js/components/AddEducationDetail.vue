
<template>
<div method="GET">
    <h1>EducationDetails</h1>
    <button class="btn btn-primary" type="button" @click="addEducationDetails">Add</button>
    <div v-for="(educationDetails, index) in EducationDetails">
        <button class="btn btn-danger float-right" type="button" @click="removeEducationDetails(index)" key="index">
            X</button>
            <div class="form-group">
                <label for="institute">Education Institute:</label>
                <input type="text" name="institute" class="form-control" placeholder="Enter Education institute"
                v-model="educationDetails.institute">
            </div>
            <div class="form-group">
                <label for="degree">Degree:</label>
                <input type="text" name="degree" class="form-control" placeholder="Enter Education Level"
                v-model="educationDetails.degree">
            </div>
             <div class="form-group">
                <label for="started_date">Started Date:</label>
                <input type="text" name="started_date" class="form-control" placeholder="Enter the attended date"
                v-model="educationDetails.started_date">
            </div>
             <div class="form-group">
                <label for="end_date">Graudated Date:</label>
                <input type="text" name="end_date" class="form-control" placeholder="Enter date of Graducation"
                v-model="educationDetails.end_date">
            </div>

    </div>
    <button type="submit" class="btn btn-primary" @click="submit">Submit</button>
</div>
</template>
<script>
export default {
    data: () => ({
        educationDetails: [],
    }),
    methods:{
        addEducationDetails(){
            this.educationDetails.push({});
        },
        removeEducationDetails(index){
            this.educationDetails.splice(index,1);
        },
        submit(){
            axios.post('/user/addEducationalDetails2'){
                educationDetails:this.educationDetails
            }
        }
    }
}
</script>