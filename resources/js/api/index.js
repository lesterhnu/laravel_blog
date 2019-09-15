//import request from '../utils/index'
import axios from 'axios'
// axios.defaults.baseURL('http://www.blog.com/api')
export var getArticleList = function(cate_id){
    return axios.get(`http://www.blog.com/api/getArticleList`,cate_id).then(res=>res.data)
}
