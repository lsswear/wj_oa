<div class="ui grid"> 
	<div class="row">
		<div class="column">
			<div class="ui breadcrumb">
			  	<a class="section" onclick="left_menu_click('set/users.blade.php')">用户管理</a>
			  	<div class="divider"> / </div>
			  	<div class="active section">用户编辑</div>
			</div>
			<div class="ui divider"></div>
			<form class="ui small form">
				<div class="two fields"> 
					<div class="field"> 
						<label>用户组</label>
						<select class="ui search dropdown" name="user_group" id="user_group"> 
							<option value="1">管理员</option>
							<option value="2" selected>操作员</option>
							<option value="3">客服</option>
						</select>
					</div>
					<div class="field"> 
						<label>用户名</label>
						<input type="text" placeholder="英文" name="user_name">
					</div>
				</div>
				<div class="inline field"> 
					<label>状态</label>
					<div class="ui toggle checkbox">
						<input type="checkbox" name="public">
						<label>禁用</label>
					</div>
				</div>
				<div class="field"> 
					<div class="ui buttons">
					  	<button class="ui primary  button" id="set_password_button">设定密码</button>
					  	<div class="or"></div>
					  	<button class="ui positive disabled button" id="update_password_button">修改密码</button>
					</div>
				</div>
				<div id="set_password">
					<div class="ui horizontal divider header"><i class="write icon"></i>设定密码</div>
					<div class="field"> 
						<label>用户密码</label>
						<input type="password" placeholder="用户密码" name="password">
					</div>
					<div class="field"> 
						<label>确认密码</label>
						<input type="password" placeholder="确认密码" name="confirm_password">
					</div>
				</div>
				<div id="update_password">
					<div class="ui horizontal divider header"><i class="write icon"></i>修改密码</div>
					<div class="field"> 
						<label>旧密码</label>
						<input type="password" placeholder="旧密码" name="old_password">
					</div>
					<div class="field"> 
						<label>新密码</label>
						<input type="password" placeholder="新密码" name="password">
					</div>
					<div class="field"> 
						<label>确认密码</label>
						<input type="password" placeholder="确认密码" name="confirm_password">
					</div>
				</div>
				<div class="ui divider"></div>
				<div class="ui primary button ">
					提交
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	function getType(type){ 
		switch(type){ 
			case 1:
				$('#set_password').show();
				$('#update_password').hide();
				break;
			case 2:
				$('#update_password').show();
				$('#set_password').hide();
				break;
		}
	}
	function init(){ 
		$('#user_group').dropdown();
		getType(1);
	}
	$(function(){ 
		init();
		$('#set_password_button').click(function(){ 
			getType(1);
			return false;
		});
		$('#update_password_button').click(function(){ 
			getType(2);
			return false;
		});
	});
	
</script>