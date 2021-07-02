<?php
  $this->title = "EasyUI - Dynamic Tabs";
?>

<head>
  <link rel="stylesheet" href="easyui/themes/<?= $theme ?>/easyui.css"> 
  <link rel="stylesheet" href="easyui/themes/icon.css">
  <link rel="stylesheet" href="custom/index.css">
</head>
<body class="easyui-layout" data-options="fit:true">

  <!---Header-->
  <div class="panel-noscroll" data-options="region:'north'" style="padding: 0 18px; margin-bottom: -1px; display: flex; justify-content: space-between; align-items: center;">
    <h2>EasyUI - Dynamic Tabs</h2>
    <form id="theme-form">
      <input id="cb-theme" name="theme" value="<?= $theme ?>">
    </form>
  </div>

  <!--Loading-->
  <div id="loading" style="user-select: none; position: absolute; height: 100%; width: 100%; display: flex; justify-content: center; align-items: center;">
    <img src="custom/images/loading.gif" style="width: 50px; height: 50px;">
  </div>

  <!--Content-->
  <div id="content" data-options="region:'center'" class="easyui-layout easyui-fluid">

    <!--Tab menu-->
    <div id="dt-menu" class="easyui-panel" style="padding:5px; width: 100%;">
      <a href="#" class="easyui-linkbutton" data-options="plain: true" onclick="addTab('google-tab')">Google</a>
      <a href="#" class="easyui-linkbutton" data-options="plain: true" onclick="addTab('bing-tab')">Bing</a>
      <a href="#" class="easyui-linkbutton" data-options="plain: true" onclick="addTab('ddg-tab')">Duckduckgo</a>
    </div>
    <!--Tab panel-->
    <div id="dt-panel" class="easyui-tabs" style="width:100%; height:100%;"></div>
  </div>

  <!--Script-->
  <script src="easyui/jquery.min.js"></script>
  <script src="easyui/jquery.easyui.min.js"></script>
  <script src="custom/index.js"></script>
</body>
</html>