<template>
    <div>
        <div class="header">
            <div class="title">李子的博客</div>
            <img src="/img/timg.jpg" alt="">
            <div class="categories">
                <span class="cate"  v-for="item in menu" :key="item">{{item}}</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Header",
        data() {
            return {
                menu:[
                    "首页",
                    "随笔"
                ]
            }
        },
    }
</script>

<style scoped lang="scss">
.header{
    background-color: #ccc;
    height:50px;
    width:100%;
    position: relative;
    .title{
        color: #fff;
        font-weight: bold;
        line-height: 50px;
        height: 50px;
        width: 100px;
    }
    img{
        height: 50px;
        display: inline-block;
        margin-left: 100px;
        position: absolute;
        top: 0;
    }
    .categories{
        position: absolute;
        top: 0;
        left:20%;
        background-color: #fff;
        .cate{
            line-height: 50px;
            margin-left: 10px;
        }
    }
}
</style>
