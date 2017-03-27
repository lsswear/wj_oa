<style> 
	#data-table-center tr td,#data-table-center tr th{ 
		text-align:center;
	 }
</style>
<div class="ui grid"> 
	<div class="row">
		<div class="column">
			<div class="ui buttons right floated">
				<label>设定类别</label>
			  	<button class="ui primary  button" id="user_group_button">组权限</button>
			  	<div class="or"></div>
			  	<button class="ui positive button" id="user_button">用户权限</button>
			</div>
			<h2 class="ui left floated header"> 
				权限设定
			</h2>
			<div class="ui clearing divider"></div>
			<label class="ui left floated header">
				类别：<b id="type_string">组权限</b> 
			</label>
			<div class="ui primary small button right floated">
				提交
			</div>
			<div class="ui small form">
				<div id="user_group">
					<div class="ui horizontal clearing divider header"><i class="write icon"></i>组权限</div>
					<div class="inline field">
						<label>权限组</label>
						<select class="ui search dropdown" name="group"> 
							<option value="1">管理员</option>
							<option value="2">操作员</option>
							<option value="3">客服</option>
						</select>
					</div>
					<br>
				</div>
				<div id="user">
					<div class="ui horizontal clearing divider header"><i class="write icon"></i>用户权限</div>
					<div class="inline field">
						<label>用户名</label>
						<input type="text" placeholder="用户名" name="name">
						<div class="ui primary icon button">
							<i class="search icon"></i>
						</div> 
					</div>
					<br>
				</div>				
				<div class="field">
					<b>权限列表</b><br>
					<div class="ui styled fluid accordion" id="rights">
					  	<div class="active title">
					  		<i class="dropdown icon"></i>abc
					  	</div>
					  	<div class="active content">
					  		<div class="inline field">
					  			<div class="ui checkbox">
							  		<input type="checkbox" id="check_all">
							  		<label>全选</label>
						  		</div>	
					  		</div>
					  		<div class="ui divider"></div>
						  	<div class="inline field">
						  		<div class="ui checkbox">
									<input type="checkbox" name="rights[]">
									<label>test1</label>
								</div>
								<div class="ui checkbox"> 
									<input type="checkbox" name="rights[]">
								  	<label>test2</label>
								</div>
							</div>
					  	</div>
						<div class="title">
							<i class="dropdown icon"></i>123
						</div>
					  	<div class="content">
					  		<div class="inline field">
					  			<div class="ui checkbox">
							  		<input type="checkbox" id="check_all">
							  		<label>全选</label>
						  		</div>	
					  		</div>
					  		<div class="ui divider"></div>
					  		<div class="inline field">
						  		<div class="ui checkbox">
									<input type="checkbox" name="rights[]">
									<label>test1</label>
								</div>
								<div class="ui checkbox"> 
									<input type="checkbox" name="rights[]">
								  	<label>test2</label>
								</div>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function getType(type){ 
		switch(type){ 
			case 1:
				$('#user_group').show();
				$('#user').hide();
				$('#type_string').text('组权限');
				break;
			case 2:
				$('#user').show();
				$('#user_group').hide();
				$('#type_string').text('用户权限');
				break;
		}
	}
	function init(){ 
		$('select.dropdown').dropdown();
		$('#rights').accordion({
			exclusive: false,
		    selector: {
		      accordion : '.accordion',
			  title     : '.title',
			  content   : '.content'
		    }
		});
		getType(1);
	}
	
	$(function(){ 
		init();
		$('#user_group_button').click(function(){ 
			getType(1);
			return false;
		});
		$('#user_button').click(function(){ 
			getType(2);
			return false;
		});
	});
</script>