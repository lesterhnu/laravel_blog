<template>
    <div class="index">
        <div class="title">
            输入长文本
        </div>
        <el-input
                type="textarea"
                :rows="15"
                placeholder="请输入内容"
                v-model="textarea">
        </el-input>

        <div class="btnf">
            <el-button type="primary" @click="submit">提交</el-button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                textarea:''
            }
        },
        methods:{
            submit(){
                var _this = this
                axios.post("http://blog.liziming.pro/api/fenci",{
                    content:_this.textarea
                }).then(function (res) {
                    console.log(res)
                    if(res.data.code==100){
                        var result = localStorage.setItem("fenci_list",JSON.stringify(res.data.data))
                        _this.$router.push("/fenci_detail");
                    }
                })
            }
        }
    }
</script>

<style scoped lang="scss">
.el-textarea{
    padding: 0px 20px;
    margin-top: 5px;

}
.btnf{
    text-align: center;
    margin-top: 10px;
    .el-button{
        width:700px;
    }
}
    .title{
        text-align: center;
        font-weight: bold;
        font-size: 20px;
    }
</style>