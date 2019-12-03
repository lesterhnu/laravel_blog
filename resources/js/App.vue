<template>
    <div id="app">
        <!--<Home></Home>-->
        <router-view />
    </div>
</template>

<script>
    import Home from "./components/Home.vue"
    export default {
        data() {
            return {

            }
        },
        components:{
            Home
        },
        created() {
            // setTimeout(() => {
            //     window.L2Dwidget.init({
            //         pluginRootPath: '../live2dw/',
            //         pluginJsPath: 'lib/',
            //         pluginModelPath: 'live2d-widget-model-shizuku/assets/',
            //         tagMode: false,
            //         debug: false,
            //         model: { jsonPath: '../live2dw/live2d-widget-model-shizuku/assets/shizuku.model.json' },
            //         display: { position: 'left', width: 200, height: 500},
            //         mobile: { show: true },
            //         log: false
            //     })
            // }, 1000)
        }
    }
</script>

<style  lang="scss">
    body, div, span, header, footer, nav, section, aside, article, ul, dl, dt, dd, li, a, p, h1, h2, h3, h4,h5, h6, i, b, textarea, button, input, select, figure, figcaption {
        padding: 0;
        margin: 0;
        list-style: none;
        font-style: normal;
        text-decoration: none;
        border: none;
        font-family:Arial, Helvetica, "Microsoft Yahei", sans-serif;
        -webkit-tap-highlight-color:transparent;
        -webkit-font-smoothing: antialiased;
        word-break: break-all;
        box-sizing: border-box;
    &:focus {
         outline: none;
     }
    }

    html,body{
        height:100%;
        width:100%;
    }

    a{
        text-decoration: none;
        color: inherit;
    &:hover{
         background:none;
         text-decoration: none;
     }
    }

    img{
        max-width: 100%;
    }
</style>