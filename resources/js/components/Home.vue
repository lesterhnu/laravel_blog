<template>
    <div >
        <el-container>
            <el-aside width="250px">
                <!--<div class="sub-title">头像</div>-->
                <div class="block">
                    <el-avatar :size="100" :src="circleUrl"></el-avatar>
                    <hr  />
                    <ul class="options">
                        <li @click="index">首页</li>
                        <li @click="fenci">分词</li>
                        <li @click="about">关于我</li>
                    </ul>
                </div>
            </el-aside>
            <el-container>
                <el-header></el-header>
                <el-main>
                    <router-view />
                </el-main>
            </el-container>
        </el-container>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                // circleUrl: "http://blog.liziming.pro/assets/images/avantar.png",
                circleUrl:"https://cube.elemecdn.com/9/c2/f0ee8a3c7c9638a54940382568c9dpng.png",
                squareUrl: "https://cube.elemecdn.com/9/c2/f0ee8a3c7c9638a54940382568c9dpng.png",
                sizeList: ["large", "medium", "small"]
            }
        },
        methods:{
            fenci(){
                this.$router.push("/fenci")
            },
            index(){
                this.$router.push("/")
            },
            about(){
                this.$router.push("/about")
            }
        }
    }
</script>

<style scoped lang="scss">
.el-aside{
    height: 100vh;
    background-color: rgb(64, 158, 255);
    background-image: -webkit-linear-gradient(top, #147B96, #E6D205 100%);//%, #147B96 50%, #E6D205 75%, #147B96);
}
/*.el-header{*/
    /*height: 20px;*/
    /*background-color: #ddd;*/
/*}*/
.el-main{
    /*background-color: #aaa;*/
    padding:0 10px;
}
@media all and (-webkit-min-device-pixel-ratio:0) and (min-resolution: .001dpcm) {
    .el-header{
        height: 20px;
        padding: 0 0;
        background-image: -webkit-linear-gradient(left, #147B96, #E6D205 25%, #147B96 50%, #E6D205 75%, #147B96);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip:content;
        -webkit-background-size: 200% 100%;
        -webkit-animation: masked-animation 4s infinite linear;
    }
}
@-webkit-keyframes masked-animation {
    0%  { background-position: 0 0;}
    100% { background-position: -100% 0;}
}
    .block{
        position: relative;
        display: block;
        .el-avatar{
            position: absolute;
            left: 75px;
            top:70px;
        }
        hr{
            position: relative;
            top:230px;
        }
        .options{
            position: relative;
            top: 250px;
            li{
                text-align: center;
                margin: 15px auto;
                cursor: pointer;
            }
        }
    }

</style>
