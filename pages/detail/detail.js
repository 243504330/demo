
Page({
  data: {
    logs: [],
    list:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20],
    scroll:true,
    id:0,
    day:'',
    time:'',
    info:'',
    success:'none',
    orderTime:'',
    userInfo:'none'
  },
  userInfo:function(){
    this.setData({
      userInfo:'block'
    })
  },
  close:function(){
    this.setData({
      userInfo:'none'
    })
  },
  onLoad: function (opt) {
    console.log(opt)
    var id = opt.id;
    var pub_url = getApp().globalData.url;
    var userId = 'b03d231de66049a791c3f1b7d5730501';
    var orderTime = opt.orderTime;
    this.setData({
      id: id,
      pub_url: pub_url,
      userId:userId,
      orderTime: orderTime
    })
    this.loadDetail();
  },
  loadDetail:function(){
    var pub_url = this.data.pub_url;
    var id = this.data.id;
    var that = this;
    var userId = this.data.userId;
    wx.request({
      url: pub_url + '/streetball/stadium/ballTeamInfo',
      method: 'GET',
      data: {
        terminal: 'ios',
        orderId: id,
        userId: userId
      },
      header: {
        'content-type': 'application/json' // 默认值
      },
      success(res) {
        console.log(res)
        if (res.data.retCode == '000') {
          var time = res.data.object.time;
          time = time.split('  ');
          that.setData({
            info:res.data.object,
            day:time[0],
            time:time[1]
          })
        }
      },
      fail(error) {
        console.log(error)
      }
    })
  },
  joinTeam:function(){
    
    if(this.data.info.orderClass == 'group'){
      console.log('包场成功');
      this.setData({
        success:'block'
      })
      var pub_url = this.data.pub_url;
      var that = this;
      var price = this.data.info.priceDes;
      var id = this.data.id;
      price = parseFloat(price.substring(1));
      var userId = this.data.userId;
      var openId = getApp().globalData.openid;
      wx.request({
        url: pub_url + '/streetball/Pay/Order/createOrderDetail',
        method: 'GET',
        data: {
          terminal: 'ios',
          orderId: id,
          price: price,
          userId:userId,
          formId:'',
          openId:openId
        },
        header: {
          'content-type': 'application/json' // 默认值
        },
        success(res) {
          console.log(res)
          if (res.data.retCode == '000') {
            var time = res.data.object.time;
            time = time.split('  ');
            that.setData({
              info: res.data.object,
              day: time[0],
              time: time[1]
            })
          }
        },
        fail(error) {
          console.log(error)
        }
      })
      return false
    }
    var orderTime = this.data.orderTime;
    var priceDes = this.data.info.priceDes;
    var address = this.data.info.address;
    var stadiumPlace = this.data.info.stadiumPlace;
    var time = this.data.info.time;
    wx.navigateTo({
      url: '../join-team/join-team?orderTime=' + orderTime + '&priceDes=' + priceDes + '&address=' + address + '&stadiumPlace=' + stadiumPlace + '&time='+time,
    })
  },
  goGroup:function(){

  },
  chose:function(e){
    console.log(e)
  }
})
