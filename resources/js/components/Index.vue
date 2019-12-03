<template>
    <div>
        <!--<li class="post-list-item fade in">-->
            <!--<article id="post-multipart-x-mixed-replace" class="article-card article-type-post" itemprop="blogPost">-->
                <!--<div class="post-meta">-->
                    <!--<time class="post-time" title="2018年07月3日 23:12:03" datetime="2018-07-03T15:12:03.000Z" itemprop="datePublished">2018年07月3日</time>-->
                <!--</div>-->
                <!--<h3 class="post-title" itemprop="name">-->
                    <!--<a class="post-title-link" href="/20180703/multipart-x-mixed-replace.html">基于 MIME 类型的服务端推送</a>-->
                <!--</h3>-->
                <!--<div class="post-content" id="post-content" itemprop="postContent">目前就职于视听行业相关的公司，故而需要接触流媒体传输相关技术。今天介绍一种基于 MIME 类型的服务端流媒体推送实现。-->
                    <!--<a href="/20180703/multipart-x-mixed-replace.html" class="post-more waves-effect waves-button">阅读全文…</a>-->
                <!--</div>-->
                <!--<div class="post-footer">-->
                    <!--<ul class="article-tag-list">-->
                        <!--<li class="article-tag-list-item">-->
                            <!--<a class="article-tag-list-link waves-effect waves-button" href="/tags/MIME/">MIME</a>-->
                        <!--</li>-->
                        <!--<li class="article-tag-list-item">-->
                            <!--<a class="article-tag-list-link waves-effect waves-button" href="/tags/Server-Push/">Server Push</a>-->
                        <!--</li>-->
                        <!--<li class="article-tag-list-item">-->
                            <!--<a class="article-tag-list-link waves-effect waves-button" href="/tags/multipart/">multipart</a>-->
                        <!--</li>-->
                        <!--<li class="article-tag-list-item">-->
                            <!--<a class="article-tag-list-link waves-effect waves-button" href="/tags/x-mixed-replace/">x-mixed-replace</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</div>-->
            <!--</article>-->
        <!--</li>-->
        <div class="post-list">
            <ul>
                <li class="card">
                    <span  class="time">2019年8月12日</span>
                    <h3>基于 MIME 类型的服务端推送</h3>
                    <div class="subtitle">
                        目前就职于视听行业相关的公司，故而需要接触流媒体传输相关技术。今天介绍一种基于 MIME 类型的服务端流媒体推送实现。
                        <br />
                        <a href="#">阅读全文...</a>
                        <hr>
                    </div>
                    <div class="tags">
                        <el-tag>标签一</el-tag>
                        <el-tag type="success">标签二</el-tag>
                        <el-tag type="info">标签三</el-tag>
                        <el-tag type="warning">标签四</el-tag>
                        <el-tag type="danger">标签五</el-tag>
                    </div>
                </li>
                <li class="card">
                    <span  class="time">2019年8月12日</span>
                    <h3>基于 MIME 类型的服务端推送</h3>
                    <div class="subtitle">
                        目前就职于视听行业相关的公司，故而需要接触流媒体传输相关技术。今天介绍一种基于 MIME 类型的服务端流媒体推送实现。
                        <br />
                        <a href="#">阅读全文...</a>
                        <hr>
                    </div>
                    <div class="tags">
                        <el-tag>标签一</el-tag>
                        <el-tag type="success">标签二</el-tag>
                        <el-tag type="info">标签三</el-tag>
                        <el-tag type="warning">标签四</el-tag>
                        <el-tag type="danger">标签五</el-tag>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
            }
        },
    }
</script>

<style scoped lang="scss">

li{
    list-style: none;
    margin-top:20px;
}
.post-list{
    padding: 0;
    margin: 20px auto;
    list-style: none;
    width: 900px;
}
.card{
    /*border:1px solid #ccc;*/
    border-radius: 5px;
    width: 800px;
    box-shadow:0 1px 2px rgba(151,151,151,0.58);
    padding: 20px 20px;
}
.time{
    font-size: 14px;
    font-weight: bolder;
    color:#ccc;
    padding-left: 30px;
}
h3{
    font-weight: bold;
    font-size: 20px;
    color:skyblue;
    display: block;
    padding-left: 20px;
}
.subtitle{
    padding-left: 25px;
}
.subtitle> a {
    padding-left: 20px;
    font-size: 12px;
    color: blue;
}
.tags{
    padding-left: 20px;
}
</style>
