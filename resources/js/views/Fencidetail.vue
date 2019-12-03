<template>
    <div class="list">
        <el-table
                :data="list"
                max-height="700"
                border
                style="width: 100%">
            <el-table-column
                    prop="word"
                    label="关键词"
                    width="180">
            </el-table-column>
            <el-table-column
                    prop="num"
                    label="出现次数"
                    width="180">
            </el-table-column>
        </el-table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                list:[]
            }
        },
        created() {
            this.list = JSON.parse(localStorage.getItem("fenci_list"))
        },


    }
</script>

<style scoped lang="scss">
.list{
    text-align: center;
    margin: 0 auto;
    .el-table{
        margin: 0 auto;
        height: 100%;
    }
}
</style>