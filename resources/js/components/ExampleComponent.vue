<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <input type="text" id="name" v-model="atai">
                        <button type="submit" @click="soushin">soushin</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        	axios.get('/lara_vue_db/public/api/userlist').then(response => console.log(response))
        },
        data(){
            return{
                atai: ""
            }
        },
        methods:{
            soushin(){
                axios.post('/lara_vue_db/public/api/adduser', {atai:this.atai});
            }
        }
    }
</script>
