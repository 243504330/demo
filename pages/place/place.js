
Page({
  data: {
    logs: [],
    list:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20],
    scroll:true,
    id:'',
    info:'',
    arrs:[1,2,3,4,5,6,7,8,1,2,3,4],
    choseId:0,
    week:'',
    windowHeight:0,
    menusFlag:'none',
    timesTop:0
  },
  scrollEvent:function(e){
    var top = e.detail.scrollTop;
    var menusFlag = this.data.menusFlag;
    var timesTop = this.data.timesTop;
    console.log(timesTop)
    if (top > timesTop && menusFlag == 'none'){

      const animation = wx.createAnimation({
        duration: 500,
        timingFunction: 'ease'
      })
      console.log('小于350')
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
      animation.translateY(begin).step({ duration: 0 })

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
    }
    if (top < timesTop && menusFlag == 'block') {
      console.log('小于350')
      const animation = wx.createAnimation({
        duration: 500,
        timingFunction: 'ease'
      })
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
      animation.translateY(begin).step({ duration: 0 })

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
    }
  },
  loadDates:function(){
    var arr = [];

    for (var i = 1; i < 30; i++) {
      var timestamp = new Date().getTime() + ((60 * 60 * 24) * i * 1000);
      var newDate = new Date(timestamp)
      var y = newDate.getFullYear();
      var m = newDate.getMonth() + 1;
      var d = newDate.getDate();
      var week = newDate.getDay();
      if (m < 10) {
        m = '0' + m
      }
      if (d < 10) {
        d = '0' + d
      }

      if (week == 0) {
        week = '日'
      }
      if (week == 1) {
        week = '一'
      }
      if (week == 2) {
        week = '二'
      }
      if (week == 3) {
        week = '三'
      }
      if (week == 4) {
        week = '四'
      }
      if (week == 5) {
        week = '五'
      }
      if (week == 6) {
        week = '六'
      }
      var date = y + '-' + m + '-' + d;

      var arrs = { date: date, week: week ,day:d}
      arr.push(arrs)
    }
    this.setData({
      arrs:arr
    })
    console.log(this.data.arrs)
  },
  onLoad: function (opt) {

    var that = this;
    wx.createSelectorQuery().select('#timesDe').boundingClientRect(function (rect) {
      // rect.id      // 节点的ID
      // rect.dataset // 节点的dataset
      // rect.left    // 节点的左边界坐标
      // rect.right   // 节点的右边界坐标
      // rect.top     // 节点的上边界坐标
      // rect.bottom  // 节点的下边界坐标
      // rect.width   // 节点的宽度
      // rect.height  // 节点的高度

      console.log(rect.top)
      that.setData({
        timesTop:rect.top
      })

    }).exec()


    let windowHeight = wx.getSystemInfoSync().windowHeight;

    var pub_url = getApp().globalData.url;
    var id = opt.id;
    var timestamp = new Date().getTime() + ((60 * 60 * 24) * 1 * 1000);
    var myDate = new Date(timestamp)
    var year = myDate.getFullYear();
    var month = myDate.getMonth();
    month = month + 1;
    var day = myDate.getDate();
    var week = myDate.getDay();
    if (week == 0) {
      week = '日'
    }
    if (week == 1) {
      week = '一'
    }
    if (week == 2) {
      week = '二'
    }
    if (week == 3) {
      week = '三'
    }
    if (week == 4) {
      week = '四'
    }
    if (week == 5) {
      week = '五'
    }
    if (week == 6) {
      week = '六'
    }
    if (month < 10) {
      month = '0' + month
    }
    if (day < 10) {
      day = '0' + day
    }
    var time = year + '-' + month + '-' + day;
    this.setData({
      pub_url:pub_url,
      id:id,
      time:time,
      week: week,
      windowHeight: windowHeight
    })
    this.loadDates();
    this.loadInfo();
  },
  loadDetail:function(){
    var that = this;
    var pub_url = this.data.pub_url;
    var id = this.data.id;
    var myDate = new Date();
    var year = myDate.getFullYear();
    var month = myDate.getMonth();
    var day = myDate.getDate();

    if (month < 10) {
      month = '0' + month
    }
    if (day < 10) {
      day = '0' + day
    }

    var time = year + '-' + month + '-' + day;
    wx.request({
      url: pub_url + '/streetball/stadium/stadiumJoins',
      method: 'GET',
      data: {
        terminal: 'ios',
        stadiumId: id,
        time: time
      },
      header: {
        'content-type': 'application/json' // 默认值
      },
      success(res) {
        console.log(res)
        if (res.data.retCode == '000') {
          that.setData({
            info: res.data.object
          })
        }
        console.log(that.data.bannerList)
      },
      fail(error) {
        console.log(error)
      }
    })
  },
  loadInfo: function () {
    var that = this;
    var pub_url = this.data.pub_url;
    var id = this.data.id;
    var time = this.data.time;
    
    wx.request({
      url: pub_url + '/streetball/stadium/stadiumInfo',
      method: 'GET',
      data: {
        terminal: 'ios',
        stadiumId: id,
        time: time
      },
      header: {
        'content-type': 'application/json' // 默认值
      },
      success(res) {
        console.log(res)
        if (res.data.retCode == '000') {
          that.setData({
            info: res.data.object
          })
        }
      },
      fail(error) {
        console.log(error)
      }
    })
  },
  goGroup:function(){

  },
  goGroups:function(){
    wx.navigateTo({
      url: '../groups/groups',
    })
  },
  goYuding:function(opt){
    var idx = opt.currentTarget.id;
    var data = this.data.info;
    console.log(data);
    var info = data.stadiumDels[idx];
    var placeInfo = data.stadium;
    console.log(info)
    //场地 地址 预定时间 钱 id
    var stadiumId = info.stadiumId;
    var address = placeInfo.address;
    var name = placeInfo.name;
    var price = info.price;
    var day = info.day;
    var time = info.time;
    var week = this.data.week;

    var str = '?stadiumId='+stadiumId+'&address='+address+'&name='+name+'&price='+price+'&day='+day+'&time='+time+'&week='+week;

    wx.navigateTo({
      url: '../ball-pay/ball-pay' + str,
    })
  },
  chose:function(e){
    console.log(e)
    var id = e.currentTarget.id;
    var date = e.currentTarget.dataset.time;
    var week = e.currentTarget.dataset.week;
    this.setData({
      choseId:id,
      time:date,
      week: week
    })
    this.loadInfo();
  }
})
