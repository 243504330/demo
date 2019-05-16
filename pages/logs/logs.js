//logs.js
const util = require('../../utils/util.js')

Page({
  data: {
    logs: [],
    list:[1,2,3],
    windowWidth:0,
    menus:[],
    page:0,
    animationData:'',
    animationBg:'',
    menusFlag:'none',
    animatioJd:'',
    x11:''
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
  qianwang: function (opt) {
    console.log(opt);
    var id = opt.currentTarget.id;
    var orderTime = opt.currentTarget.dataset.ordertime;
    wx.navigateTo({
      url: '../detail/detail?id=' + id + '&orderTime=' + orderTime,
    })
  },
   onShow:function(){
     this.setData({
       menusFlag: 'none'
     })
     var list = this.data.list;
     for(var i = 0;i<list.length;i++){
       console.log(i)
       var ani = 'ani' + i
       this.animation = wx.createAnimation({
         duration: 500,
         timingFunction: 'ease'
       })
       this.animation.width('80%').step({ duration: 1000 });

       var x = 'x' + i;
       var json = { x: this.animation.export()}

       this.setData(json)
     }
   },
   loadList:function(){
     var that = this;
     var pub_url = this.data.pub_url;
     wx.request({
       url: pub_url + '/streetball/stadium/getballTeamList',
       method: 'GET',
       data: {
         terminal: 'ios',
         longitude: '',
         latitude: '',
         orderClass:'',
         day:'',
         startTime:'',
         pageCurrent:0,
         pageSize:20
       },
       header: {
         'content-type': 'application/json' // 默认值
       },
       success(res) {
         console.log(res)
         if (res.data.retCode == '000') {
           var list = res.data.data;
           for(var i = 0 ; i < list.length ; i ++ ){
             var psen = list[i].actualNum;
             psen = psen.split('/');
             var priceDes = list[i].priceDes;
             priceDes = priceDes.split('￥');
             priceDes = priceDes[1];
             psen = parseFloat(psen[0]) / parseFloat(psen[1]);
             list[i]['psen'] = psen;
             list[i]['priceDes'] = priceDes;
           }
           that.setData({
             list:list
           })
           console.log(that.data.list)
         }
       },
       fail(error) {
         console.log(error)
       }
     })
   },
    onLoad: function () {
    let windowWidth = wx.getSystemInfoSync().windowWidth
    var pub_url = getApp().globalData.url;
    
    this.setData({
      windowWidth: windowWidth,
      pub_url: pub_url,
      menus:['全部','今天','本天','下周','其他时间'],
      logs: (wx.getStorageSync('logs') || []).map(log => {
        return util.formatTime(new Date(log))
      })
    })
    this.loadList();
  }
})
