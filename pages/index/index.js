//index.js
//获取应用实例
const app = getApp()

Page({
  data: {
    indicatorDots: true,
    autoplay: false,
    interval: 5000,
    duration: 1000,
    banners:[1,2,3,4,5,6,7,8,9,1,2,3,4,5],
    bannerList:[],
    ballList:[1,2,3,4],
    windowWidth:0,
    nMargin:30,
    pMargin:30,
    sLeft:30,
    sRight:15,
    scroll: true,
    page:0,
    menusFlag:'none'
  },
  qianwang:function(){
    wx.navigateTo({
      url: '../detail/detail',
    })
  },
  getOpenId: function () {
    var that = this;
    var pub_url = this.data.pub_url;
    wx.login({
      success(ress) {
        var code = ress.code
        console.log(code)
        wx.request({
          url: pub_url + '/streetball/Pay/MiniProgramPay/getOpenId',
          method: 'GET',
          data: {
            terminal: 'ios',
            code: code
          },
          header: {
            'content-type': 'application/json' // 默认值
          },
          success(res) {
            console.log(res)
            var data = JSON.parse(res.data.object);

            console.log(data)

            if (res.data.retCode == '000') {
              getApp().globalData.openid = data.openid
              getApp().globalData.session_key = data.session_key
              getApp().globalData.unionid = data.unionid

            } else {

            }
          },
          fail(error) {
            console.log(error)
          }
        })
      }
    })
  },
  goPlace:function(opt){
    console.log(opt)
    var id = opt.currentTarget.id;
    wx.navigateTo({
      url: '../place/place?id=' + id,
    })
  },
  allBall:function(){
    wx.navigateTo({
      url: '../detail/detail',
    })
  },
  loadBanner:function(){
    var that = this;
    var pub_url = this.data.pub_url;
    wx.request({
      url: pub_url + '/streetball/advert/getAdvert',
      method: 'GET',
      data: {
        terminal: 'ios'
      },
      header: {
        'content-type': 'application/json' // 默认值
      },
      success(res) {
        console.log(res)
        if (res.data.retCode == '000') {
          that.setData({
            bannerList: res.data.data
          })
        }
        console.log(that.data.bannerList)
      },
      fail(error) {
        console.log(error)
      }
    })
  },
  loadBallPlace:function(){
    var that = this;
    var pub_url = this.data.pub_url;
    wx.request({
      url: pub_url + '/streetball/stadium/stadiumHomePage',
      method: 'GET',
      data: {
        terminal: 'ios',
        longitude:'',
        latitude:''
      },
      header: {
        'content-type': 'application/json' // 默认值
      },
      success(res) {
        console.log(res)
        if (res.data.retCode == '000') {
          that.setData({
            ballList:res.data.data
          })
        }
        console.log(that.data.bannerList)
      },
      fail(error) {
        console.log(error)
      }
    })
  },
  donghua:function(){
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
    if (menusFlag == 'block') {
      begin = 0;
      end = -220;
      flag = 'none';
    } else {
      begin = -220;
      end = 0;
      flag = 'block';
    }
    animation.scale(0.1, 0.1).step({ duration: 500 })

    this.setData({
      animationData: animation.export()
    })
    var that = this
    setTimeout(function(){
      that.setData({
        menusFlag: flag
      })
      animation.scale(1, 1).step({ duration: 500 })

      that.setData({
        animationData: animation.export()
      })
    },200)

  },
  onLoad: function () {
    let windowWidth = wx.getSystemInfoSync().windowWidth

    var pub_url = getApp().globalData.url;
    
    this.setData({
      pub_url:pub_url
    })
    this.donghua();
    this.getOpenId();
    this.loadBanner();
    this.loadBallPlace();

    this.setData({
      windowWidth: windowWidth
    })
  },
  changeS:function(e){
    var page = e.detail.current;
    console.log(page)
    if(page == 0){
      this.setData({
        sLeft:30,
        sRight:15
      })
    } else if (page == banners.length){
      this.setData({
        sLeft: 30,
        sRight: 15
      })
    }else{
      this.setData({
        sLeft: 15,
        sRight: 15
      })
    }
  }
})
