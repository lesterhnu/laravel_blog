<template>
<div>
    <div class="main">
        <el-carousel trigger="click" >
            <el-carousel-item v-for="item in banner_list" :key="item" class="swiper_item">
                <img :src="item" alt="">
            </el-carousel-item>
        </el-carousel>
        <!--<div class="content">-->
            <!--<div v-for="item in list" :key="item.id" class="card">-->
                <!--<h1>{{item.title}}</h1>-->
            <!--</div>-->
        <!--</div>-->
        <div class="content">
            <md-card class="card" v-for="item in list" :key="item.id">
                <md-card-header>
                    <md-card-header-text>
                        <div class="md-title">{{item.title}}</div>
                        <div class="md-subhead">{{item.sub_title}}</div>
                    </md-card-header-text>
                </md-card-header>
                <md-card-actions>
                    <md-button>动作</md-button>
                    <md-button>动作</md-button>
                </md-card-actions>
            </md-card>
        </div>
    </div>
</div>
</template>

<script>
    import {getArticleList} from "../api/index";

    export default {
        name: "Container",
        data() {
            return {
                list: [],
                banner_list:[
                    '/img/banner1.gif',
                    '/img/banner2.jpg',
                    '/img/banner3.jpeg',
                    '/img/banner4.jpg'
                ],
                currentDate: new Date()
            }
        },
        methods:{
            getList:function (cate_id) {
                getArticleList(cate_id).then(res=>{
                    this.list = res.list
                    console.log(this.list)
                })

            }
        },
        created:function () {
            this.getList();
        }
    }
</script>

<style scoped lang="scss">
.main{
    /*height: 100vh;*/
    width: 90%;
    margin: auto;
    border: 1px solid #ccc;
    background-color: #dddddd;
    .el-carousel{
        height: 400px;
        .swiper_item{
            height: 400px;
        }
        /*.el-carousel__item{*/
            /*height: 400px;*/
        /*}*/
        img{
            height: 100%;
            width: 100%;
            margin: auto;
        }
    }
    .content{
        background-color: #ff0;
        padding-right: 20px;
        padding-left: 10px;
        padding-top: 5px;
        width: 75%;
        display: flex;
        flex-wrap: wrap;
        .card{
            background-color: #ccc;
            width:300px;
        }
    }
}
.time {
    font-size: 13px;
    color: #999;
}

.bottom {
    margin-top: 13px;
    line-height: 12px;
}

.button {
    padding: 0;
    float: right;
}

.image {
    width: 100%;
    display: block;
}

.clearfix:before,
.clearfix:after {
    display: table;
    content: "";
}

.clearfix:after {
    clear: both
}
</style>
