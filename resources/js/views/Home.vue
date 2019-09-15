<template>
    <div>
        <Header>11</Header>
        <Container></Container>
    </div>
</template>

<script>
    // import { getUserInfo } from "../api/index"
    import Header from "../components/Header"
    import Container from "../components/Container"
    export default {
        name: "Home",
        data(){
            return {
                active:0,
                username:''
            }
        },
        components:{
            Header,
            Container
        },
        methods:{

        },
        created() {

        }
    }
</script>

<style scoped lang="scss">
    .callyou{
        width:1080px;
        height:1920px;
        background:rgba(255,255,255,1);
    }
</style>
