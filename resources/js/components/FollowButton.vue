<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser" v-text="buttonText">Follow</button>
    </div>
</template>

<script>
    export default {
        props:['userId', 'follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function () {
            return{
                status: this.follows,
            }
        },

        methods:{
            followUser(){
                axios.post('/follow/' + this.userId)
                    .then(response => {

                        let followersElement = document.getElementsByClassName('followers_count')[0];
                        let followers = parseInt(followersElement.innerText);

                        this.status = !this.status;

                        followers = this.status === true ? followers + 1 : followers - 1;
                        followersElement.innerHTML = followers;
                    })
                    .catch(errors =>{
                        if(errors.response.status === 401){
                            window.location = '/login';
                        }
                    });
            }
        },

        computed: {
            buttonText(){
                return (this.status) ? 'Unfollow' : 'Follow'
            }
        }
    }
</script>
