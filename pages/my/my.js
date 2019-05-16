
Page({
  data: {
    logs: []
  },
  onLoad: function () {

  },
  login:function(){
    wx.navigateTo({
      url: '../login/login',
    })
  },
  goGroup:function(){
    wx.navigateTo({
      url: '../group-pin/group-pin',
    })
  }
})
