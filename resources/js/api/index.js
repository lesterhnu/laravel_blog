import request from '../utils/index'
export const getUserInfo=function(){
    var url = "/getUserInfo"
    var data = {
        id:1001
    }
    return request(url,'post',data).then(res=>{
        if(res.code==1000){
            console.log(res.msg)
        }else{
            console.log('error')
        }
        return request('/getPhoneNUmber')
    }).then(res=>{
        if(res.code==1000){
            console.log(res.phone_number)
        }
    })
}