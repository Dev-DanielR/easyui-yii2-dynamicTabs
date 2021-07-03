<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="content" data-options="region:'center'" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">

    <div style="width: 40%; min-width: 250px; max-width: 500px;">
        <h1 style="text-align: center;"><?= Html::encode($this->title) ?></h1>
        <p style="text-align: justify;">Please fill out the following fields to login:</p>

        <form id="login-form" method="post">
            <div style="margin-bottom:20px">
                <input
                    class="easyui-textbox"
                    name="username"
                    style="width:100%"
                    data-options="label:'Username:', required:'true', iconCls:'icon-man'">
            </div>
            <div style="margin-bottom:20px">
                <input
                    class="easyui-textbox"
                    name="password"
                    style="width:100%"
                    data-options="label:'Password:', required:'true', iconCls:'icon-lock'">
            </div>
            <div style="margin-bottom:20px">
                <input
                    class="easyui-checkbox"
                    type="checkbox"
                    name="rememberMe"> <span>Remember me</span>
            </div>
            <div style="text-align: center; padding: 5px 0;">
                <a href="javascript:void(0)" class="easyui-linkbutton" onclick="sendForm()" style="width:80px">Login</a>
            </div>
        </form>
    </div>

</div>

<!--Scripts-->
<script src="easyui/jquery.min.js"></script>
<script src="easyui/jquery.easyui.min.js"></script>
<script src="custom/login.js"></script>