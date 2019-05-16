
Page({
  data: {
    logs: [],
    list:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20],
    scroll:true,
    id:0,
    pinchang:'none',
    baochang:'block',
    ctClass:'b-c',
    info:'',
    isFriend:'朋友',
    type:'bao'
  },
  friendClick:function(){
    var isFriend = '';
    if (this.data.isFriend == '朋友'){
      isFriend = '路人球友';
    }else{
      isFriend = '朋友';
    }
    this.setData({
      isFriend: isFriend
    })
  },
  onLoad: function (opt) {
    var days = opt.day.split('-');
    var day = parseInt(days[1]) + '月' + parseInt(days[2]) + '日'
    var info = {address:opt.address,day:day,name:opt.name,price:opt.price,stadiumId:opt.stadiumId,time:opt.time,week:opt.week};
    console.log(info)
    var pub_url = getApp().globalData.url;
    this.setData({
      info:info,
      pub_url:pub_url
    })
  },
  goGroup:function(){

  },
  wxPay:function(){
    wx.navigateTo({
      url: '../buy-success/buy-success',
    })
  },
  pinClick:function(){
    console.log(666)
    this.setData({
      pinchang:'block',
      baochang:'none',
      ctClass:'p-c',
      type:'pin'
    })
  },
  baoClick:function(){
    this.setData({
      pinchang: 'none',
      baochang: 'block',
      ctClass: 'b-c',
      type:'bao'
    })
  },
  chose:function(e){
    console.log(e)
    var id = e.currentTarget.id;
    this.setData({
      id:id
    })
  }
})
