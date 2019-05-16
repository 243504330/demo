
Page({
  data: {
    logs: [],
    list:[1,2,3,4,5],
    windowHeight:0,
    type:'all',
    currentTab:0
  },
  onLoad: function () {
    let windowHeight = wx.getSystemInfoSync().windowHeight
    this.setData({
      windowHeight: windowHeight
    })
  },
  bindOrder:function(event){
    console.log(event)
    var page = event.detail.current;
    var type = '';
    if(page == 0){
      type = 'all';
    }
    if(page == 1){
      type = 'pin';
    }
    if(page == 2){
      type = 'success'
    }
    if(page == 3){
      type = 'fail'
    }
    if(page == 4){
      type = 'ok'
    }
    this.setData({
      type:type
    })
  },
  chose:function(opt){
    console.log(opt)
    var type = opt.currentTarget.id;
    var currentTab = 0;
    if(type == 'all'){
      currentTab = 0
    }
    if(type == 'pin'){
      currentTab = 1
    }
    if(type == 'success'){
      currentTab = 2
    }
    if(type == 'fail'){
      currentTab = 3
    }
    if(type == 'ok'){
      currentTab = 4
    }
    this.setData({
      type:type,
      currentTab: currentTab
    })
  },
  onPullDownRefresh() {
    wx.showToast({
      title: '加载中',
      icon: 'loading'
    })
    setTimeout(function () {
      wx.stopPullDownRefresh({
        complete(res) {
          wx.hideToast()
          console.log(res, new Date())
        }
      })
    }, 1000)

  },
})
