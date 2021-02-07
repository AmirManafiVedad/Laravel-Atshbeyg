<template>

</template>

<script>
    export default {
        data(){
            return{
                province: [],
                cities: [],
                flag:false,
            }
        },
        methods:{
            getAllCities:function () {
                axios.get('/api/cities' + this.province).then(res=> {
                        this.cities = res.data.cities
                }).catch(err=>{
                    console.log(err)
                })
            },
        }
    }
</script>
