//logs.js
const util = require('../../utils/util.js')

Page({
  data: {
    logs: [],
    list:[1,2,3,4,5,6,7,8,9,11,12,12],
    windowWidth:0,
    menus:[],
    page:0,
    animationData:'',
    animationBg:'',
    menusFlag:'none'
  },
  onReady: function () {
    this.animation = wx.createAnimation()
  },
  choseClick:function(){
    const animation = wx.createAnimation({
      duration: 500,
      timingFunction: 'ease'
    })
    const animation2 = wx.createAnimation({
      duration: 500,
      timingFunction: 'ease'
    })
    var menusFlag = this.data.menusFlag;
    var begin = 0;
    var end = 0;
    var flag = '';
    if(menusFlag == 'block'){
      begin = 0;
      end = -220;
      flag = 'none';
    }else{
      begin = -220;
      end = 0;
      flag = 'block';
    }
    animation.translateY(begin).step({ duration : 0})

    this.setData({
      animationData: animation.export()
    })
    this.setData({
      menusFlag: flag
    })
    animation.translateY(end).step({ duration: 500 })

    this.setData({
      animationData: animation.export()
    })

   },
   onShow:function(){
     this.setData({
       menusFlag: 'none'
     })
     const animation2 = wx.createAnimation({
       duration: 500,
       timingFunction: 'ease'
     })
     animation2.opacity(0).step({ duration: 0 });

     this.setData({
       animationBg: animation2.export()
     })
     animation2.opacity(1).step({ duration: 1000 });

     this.setData({
       animationBg: animation2.export()
     })
   },
  onLoad: function () {
    let windowWidth = wx.getSystemInfoSync().windowWidth

    this.setData({
      windowWidth: windowWidth,
      menus:['全部','今天','本天','下周','其他时间'],
      logs: (wx.getStorageSync('logs') || []).map(log => {
        return util.formatTime(new Date(log))
      })
    })
  }
})
