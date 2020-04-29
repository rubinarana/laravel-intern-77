<template>
    <button class="btn btn-primary btn-small" type="submit" @click="toggleFollow">{{ followUnfollow }}</button>
</template>

<script>
export default {

    props: [
        'follows' , 'user_id'
    ],

    mounted() {
        if(this.follows) {
            this.current_follow = true
        }
    },

    data: () => ({
        current_follow: false
    }),

    // Functions that we can call inside template
    methods: { 
        toggleFollow() {
            if(this.current_follow) {
                this.unfollow()
            } else {
                this.follow()
            }
            // this.current_follow = !this.current_follow
            
        },
        follow() {
            const that = this;
            axios.post("/follow", {
                user_id : this.user_id
            }).then( function (response) {
                // console.log(response)
                if(response.data && response.data.status && response.data.status == "success") {

                    that.current_follow = !that.current_follow

                    that.$emit('updated', response.data)
                }

                // debugger
            })
        },
        unfollow() {
            axios.post("/unfollow", {
                user_id : this.user_id
            }).then( (response) => {
                // console.log(response){
                    if(response.data && response.data.status && response.data.status == "success") {

                        this.current_follow = !this.current_follow
                        this.$emit('updated', response.data)

                    }

                // debugger

            })
        }
    },

    // Return computed data or works as a method
    computed: {
        followUnfollow() {
            return this.current_follow ? "Unfollow" : "Follow"
        }
    }

}

/** 
 * if used without prop, value is attribute
 * if used with prop, value is prop
 */
</script>