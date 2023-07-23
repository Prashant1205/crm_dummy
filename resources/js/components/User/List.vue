<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">phone</th>
            <th scope="col">upi</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for ="d in data">
            <th scope="row">1</th>
            <td>{{d.name}}</td>
            <td>{{d.phone}}</td>
            <td>{{d.utr_upi}}</td>
        </tr>

        </tbody>
    </table>
</template>


<script>
    export default {
        data(){
            return {
                data : [],
            }
        },
        created(){
            this.getData();
        },
        methods: {
            getData(){
                this.$http.get("listuser").then(response => {this.data = response.data})
            }
        }
    }
</script>
