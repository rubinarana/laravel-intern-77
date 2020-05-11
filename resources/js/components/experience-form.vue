<template>
    <div class="container mb-5">
        <button class="btn btn-sm btn-success  mb-3" type="button" @click="addSocialLink">Add More</button>
        <h1>Social links</h1>
        <div id="socialForm">
            <template v-for="(sl, index) in experience">
                <button class="float-right btn-danger" type="button" @click="removeLink(index)" :key="index">X</button>
                <div class="form-group">
                    <label for="">Workplace Name:</label>
                    <input type="text" class="form-control mb-3" id="work_place" name="work_place[]" placeholder="enter your workplace name" v-model="sl.workPlace">
                </div>
                <div class="form-group">
                    <label for="">started_at</label>
                    <input type="date" class="form-control mb-3" id="start" placeholder="enter your job start date" name="start_at[]" v-model="sl.start">
                </div>
                <div class="form-group">
                    <label for="">ended_at</label>
                    <input type="date" class="form-control mb-3" id="end" placeholder="enter your ended job" name="end_at[]" v-model="sl.end">
                </div>
            </template>
        </div>
        <button type="submit"  class="btn btn-success mb-3" value="submit">Submit</button>

    </div>
</template>
<script>
    export default {
        data: () => ({
            experience:[]
        }),
        computed: {
            workPlace () {

            },
            startDate () {

            },
            endDate () {

            },
            formIsValid () {
                return this.workPlace,this.startDate,this.endDate()
            }
        },
        methods: {
            addSocialLink() {
                this.experience.push({})
            },
            removeLink(index) {
                this.experience.splice(index, 1);
            },
            submit(){
                //alert('hey');
                //e.preventDefault();
                axios.post('experiene',{
                    workPlace: this.workPlace,
                    start: this.start,
                    end: this.end
                })
            }
        }
    }
</script>
