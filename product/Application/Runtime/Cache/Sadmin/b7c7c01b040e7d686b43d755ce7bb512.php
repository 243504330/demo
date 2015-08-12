<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>公司主页3</title>
	<link href="/product/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/product/Public/css/modern-business.css" rel="stylesheet">
    <link href="/product/Public/css/editor.css" rel="stylesheet">
    <link href="http://www.bootcss.com/p/layoutit/css/bootstrap-combined.min.css" rel="stylesheet">
	<link href="http://www.bootcss.com/p/layoutit/css/layoutit.css" rel="stylesheet">
    <link href="/product/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>


<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="alert alert-error">
				 <button type="button" class="close" data-dismiss="alert">×</button>
				<h4>
					提示!
				</h4> <strong>警告!</strong> 请注意你的个人隐私安全.
			</div>
			
	
			<div class="view">
                <div class="row-fluid clearfix">
                  <div class="span12 column ui-sortable"><div class="box box-element ui-draggable" style="display: block; position: relative; opacity: 1; z-index: 0;"> <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>删除</a> <span class="drag label"><i class="icon-move"></i>拖动</span>
              <div class="preview">遮罩窗体</div>
              <div class="view"> 
                <!-- Button to trigger modal --> 
                <a id="modal-576123" href="#modal-container-576123" role="button" class="btn" data-toggle="modal" contenteditable="true">触发遮罩窗体</a> 
                
                <!-- Modal -->
                <div id="modal-container-576123" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel" contenteditable="true">标题栏</h3>
                  </div>
                  <div class="modal-body">
                    <p contenteditable="true">显示信息</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true" contenteditable="true">关闭</button>
                    <button class="btn btn-primary" contenteditable="true">保存设置</button>
                  </div>
                </div>
              </div>
            </div></div>
                </div>
              </div>
	


			<div class="row-fluid">
				<div class="span3">
					<ul class="nav nav-list">
						<li class="nav-header">
							列表标题
						</li>
						<li class="active">
							<a href="<?php echo U('salon/index');?>">沙龙首页列表</a>
						</li>
						<li>
							<a href="#"></a>
						</li>
						<li>
							<a href="#">应用</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">帮助</a>
						</li>
					</ul>
				</div>
				
  <form class="form-horizontal" method="post"  enctype="multipart/form-data">
    <fieldset>
      <div id="legend" class="">
        <legend class="">表单名<?php echo ($data["id"]); ?></legend>
      </div>
    

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">嘉宾</label>
          <div class="controls">
            <div class="textarea">
              <textarea placeholder="" type="" class="" name="compere"><?php echo ($data["compere"]); ?></textarea>
            </div>
            <p class="help-block"></p>
          </div>
        </div>

    

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">企业</label>
          <div class="controls">
            <input type="text" placeholder="placeholder" class="input-xlarge" name="title" value="<?php echo ($data["title"]); ?>">
            <p class="help-block"></p>
          </div>
    </div>
    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">嘉宾</label>
          <div class="controls">
            <div class="textarea">
                  <textarea placeholder="<?php echo ($data["guest"]); ?>" type="" class="" name="guest"><?php echo ($data["guest"]); ?> </textarea>
            </div>
          </div>
     </div>

    

    <div class="control-group">
          <label class="control-label">图片上传</label>

          <!-- File Upload -->
          <div class="controls">
            <input class="input-file" id="fileInput" type="file" name="img">
          </div>
    </div>


    <div class="control-group">
          <label class="control-label">图片上传</label>

          <!-- File Upload -->
          <div class="controls">
            <input class="input-file" id="fileInput" type="file" name="img2">
          </div>
    </div>

 
 
    <div class="control-group">
          <label class="control-label">Button</label>

          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success">Button</button>
          </div>
     </div>

    

    </fieldset>
  </form>
				
			</div>
		</div>
	</div>
</div>



<script src="/product/Public/js/jquery.js"></script>
<script src="/product/Public/js/bootstrap.min.js"></script>

</body>
</html>