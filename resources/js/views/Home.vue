<template>
    <div>
        <!--<span class="callyou">称呼您为</span>-->
        <!--<van-button type="info" size="small">信息按钮</van-button>-->
        <!--<van-button type="warning" size="small">警告按钮</van-button>-->
        <!--<van-button type="danger" size="small">危险按钮</van-button>-->
        <van-cell-group>
            <van-cell title="单元格" value='42342' />
            <van-cell title="单元格" value="内容" label="描述信息"  />
        </van-cell-group>
        <van-tabbar v-model="active">
            <van-tabbar-item icon="home-o" >标签</van-tabbar-item>
            <van-tabbar-item icon="search">标签</van-tabbar-item>
            <van-tabbar-item icon="friends-o">标签</van-tabbar-item>
            <van-tabbar-item icon="setting-o">标签</van-tabbar-item>
        </van-tabbar>
        <!--<van-grid>-->
            <!--<van-grid-item v-for="value in 2" :key="value" icon="photo-o" text="文字"/>-->
        <!--</van-grid>-->
        <van-button type="primary" size="small">{{username}}</van-button>
    </div>
</template>

<script>
    // import { getUserInfo } from "../api/index"
    export default {
        name: "Home",
        data(){
            return {
                active:0,
                username:''
            }
        },
        methods:{
            getUserInfo(){
                axios.get('/api/getUserInfo').then(res=>{
                    console.log(res.data)
                    this.username = res.data.username
                    return res.data
                })
            }
        },
        created() {
            this.getUserInfo()
            // console.log(res)
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