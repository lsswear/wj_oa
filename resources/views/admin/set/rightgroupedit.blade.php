<div class="ui grid"> 
	<div class="row">
		<div class="column">
			<div class="ui breadcrumb">
			  	<a class="section" onclick="left_menu_click('set/rightgroup.html')">权限组管理</a>
			  	<div class="divider"> / </div>
			  	<div class="active section">权限组编辑</div>
			</div>
			<div class="ui divider"></div>
			<form class="ui small form">
				<div class="inline field"> 
					<label>权限组名</label>
					<input type="text" placeholder="英文" name="user_group_name">
				</div>
				<div class="inline field"> 
					<label>状态</label>
					<div class="ui toggle checkbox">
						<input type="checkbox" name="public">
						<label>禁用</label>
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
</script>