
Page({
  data: {
    logs: [],
    list:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20],
    scroll:true,
    id:0,
    ptBtn:true,
    back:true,
    btn:'确认'
  },
  onLoad: function () {

  },
  goGroup:function(){

  },
  chose:function(e){
    console.log(e)
    var id = e.currentTarget.id;
    this.setData({
      id:id
    })
  }
})
