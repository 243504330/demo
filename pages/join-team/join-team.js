
Page({
  data: {
    logs: [],
    list:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20],
    scroll:true,
    id:0,
    info:''
  },
  onLoad: function (opt) {
    console.log(opt)
    var info = {address:opt.address,orderTime:opt.orderTime,priceDes:opt.priceDes,stadiumPlace:opt.stadiumPlace,time:opt.time};
    this.setData({
      info:info
    })
  },
  goGroup:function(){

  },
  wxPay:function(){
    wx.navigateTo({
      url: '../buy-success/buy-success',
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
