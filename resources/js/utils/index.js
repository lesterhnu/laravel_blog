const url = "http://www.fastcut.com/api"

const request = function(url,method='get',data,header={}){
    if(method=='get'){
        return new Promise((resolve,reject) => {
            return axios.get(url)
        })
    }else{
        return new Promise((resolve,reject) => {
            return axios.post(url,data)
        })
    }
}
export default {
    request
}