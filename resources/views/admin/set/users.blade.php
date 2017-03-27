<style> 
	#data-table-center tr td,#data-table-center tr th{ 
		text-align:center;
	 }
	.ui.form .inline.field > .selection.dropdown,.ui.form .inline.field > input{ 
		width:80%;
	}
</style>
<div class="ui grid"> 
	<div class="row">
		<div class="column">
			<div class="ui primary button right floated" id="add_user">
				<i class="plus icon"></i>
				添加用户
			</div>
			<h2 class="ui left floated header"> 
				用户管理
			</h2>
			<div class="ui clearing divider"></div>
			<div class="ui mini form">
				<div class="three fields">
					<div class="inline field"> 
						<label>用户组</label>
						<select class="ui search dropdown" name="group" id="group"> 
							<option value="1">管理员</option>
							<option value="2">操作员</option>
							<option value="3">客服</option>
						</select>
					</div>
					<div class="inline field"> 
						<label>用户名</label>
						<input type="text" placeholder="用户名" name="name">
					</div>
					<div class="rightaligned field"> 
						<div class="mini ui primary button">
							搜索
						</div>
					</div>
				</div>
			</div>
			<div class="ui divider"></div>
			<table class="ui four column very compact structured blue hover table" id="data-table-center">
			  	<thead>
				    <tr>
				      	<th>用户名</th>
				      	<th>权限组</th>
				      	<th>状态</th>
				      	<th>操作</th>
				    </tr>
			  	</thead>
			  	<tbody>
				    <tr class="warning">
				      	<td>王尼玛</td>
				      	<td>管理员</td>
				      	<td>禁用</td>
				      	<td><a class="view">查看</a> <a class="edit">修改</a></td>
				    </tr>
				    <tr>
				      	<td>张全蛋</td>
				      	<td>管理员</td>
				      	<td>启用</td>
				      	<td><a class="view">查看</a> <a class="edit">修改</a></td>
				    </tr>
				</tbody>
				<tfoot class="full-width"> 
					<tr> 
						<th colspan="4">
							<div class="ui pagination menu">
						        <a class="icon item">
						          <i class="left chevron icon"></i>
						        </a>
						        <a class="item">1</a>
						        <a class="item">2</a>
						        <a class="item">3</a>
						        <a class="item">4</a>
						        <a class="icon item">
						          <i class="right chevron icon"></i>
						        </a>
						    </div>
						</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<div class="ui fullscreen modal" id="users_edit_model">
	<i class="close icon"></i>
	<div class="header">
	    用户信息
	</div>
	<div class="content" id="users_edit_model_content">
		<div class="ui active inverted dimmer">
		    <div class="ui loader"></div>
		</div>
	</div>
</div>
<script>
$(function(){
	$('#group').dropdown();
	//$('#users_edit_model_content').load('./set/useredit.blade.php');
	$('#add_user').on('click',function(){ 
		$('#content').load('./set/useredit.html');
	});
	$('.view').on('click',function(){ 
		$('#content').load('./set/useredit.html');
	});
	$('.edit').on('click',function(){ 
		$('#content').load('./set/useredit.html');
	});
	/*$('#content').load('./set/useredit.blade.php');
	$('#users_edit_model').modal('attach events', '#add_user', 'show');*/
});
</script>