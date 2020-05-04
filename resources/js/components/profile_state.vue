<template>
    <div>
        Following ({{Followers}})
        Followers ({{Following}})
        <!-- Posts ({{posts}}) -->
        {{ communityCount }}
        <follow-unfollow :follows=follows :user_id=user_id  @updated=updated v-if="!own_profile"></follow-unfollow>

        <input v-model="something"/>
        <button @click="create_post">submit</button>
        
    </div> 
</template>

<script>
export default {
    props: [ //input
        'followers', 'following', 'user_id', 'follows', 'own_profile' 
    ],

    data: () => ({
        Followers: 0,
        Following: 0,
        Posts: 0,
        Something: "",
        posts_data: [

        ]
    }), //db

    mounted() {
        this.Followers = this.followers
        this.Following = this.following
        // axios.get('/posts').then((response)=> {
        //     this.posts_data = response.data.posts
        // })
    },

    methods: {
        updated(e) {
            this.Followers = this.validate(e.follower) ? e.follower : this.Followers
            this.Following = this.validate(e.following) ? e.following : this.Following 
        },
        validate(value){ 
            return value > -1 ? true : false
        },
        create_post(){
            axios.post('/post/create', {
                content: this.something
            }).then((response) => {
                
            })
            // es6
            // async functions in javacript
        }
    },

    computed: {
        communityCount() {
            return this.Followers + this.Following
        }
    }
}
// hoisting
</script>