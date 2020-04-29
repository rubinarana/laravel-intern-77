<template>
    <div>
        Following ({{Followers}})
        Followers ({{Following}})
        <!-- Posts ({{posts}}) -->
        <follow-unfollow :follows=follows :user_id=user_id  @updated=updated v-if="!own_profile"></follow-unfollow>
    </div>
</template>

<script>
export default {
    props: [
        'followers', 'following', 'user_id', 'follows', 'own_profile'
    ],

    data: () => ({
        Followers: 0,
        Following: 0,
        posts: 0
    }),

    mounted() {
        this.Followers = this.followers
        this.Following = this.following
    },

    methods: {
        updated(e) {
            this.Followers = e.follower
            this.Following = e.following
        }
    }
}
// hoisting
</script>