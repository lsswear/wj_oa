<div class="ui grid"> 
	<div class="row">
		<div class="column">
			<div class="ui breadcrumb">
			  	<a class="section" onclick="left_menu_click('set/right.html')">权限管理</a>
			  	<div class="divider"> / </div>
			  	<div class="active section">权限编辑</div>
			</div>
			<div class="ui divider"></div>
			<form class="ui small form">
				<div class="two fields"> 
					<div class="field"> 
						<label>权限组</label>
						<select class="ui search dropdown" name="user_group" id="right_group"> 
							<option value="1">菜单一</option>
							<option value="2" selected>菜单二</option>
							<option value="3">菜单三</option>
						</select>
					</div>
					<div class="field"> 
						<label>权限名</label>
						<input type="text" placeholder="英文" name="right_name">
					</div>
				</div>
				<div class="two fields"> 
					<div class="field"> 
						<label>权限代码</label>
						<input type="text" placeholder="英文" name="right_code">
					</div>
					<div class="field"> 
						<label>权限路径</label>
						<input type="text" placeholder="英文" name="right_url">
					</div>
				</div>
				<div class="inline field"> 
					<label>状态</label>
					<div class="ui toggle checkbox">
						<input type="checkbox" name="public">
						<label>禁用</label>
					</div>
					<div class="ui toggle checkbox">
						<input type="checkbox" name="public">
						<label>不显示</label>
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
	$('#right_group').dropdown();
</script>