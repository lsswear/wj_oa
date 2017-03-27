<style> 
	#data-table-center tr td,#data-table-center tr th{ 
		text-align:center;
	 }
</style>
<div class="ui grid"> 
	<div class="row">
		<div class="column">
			<div class="ui primary button right floated" id="right_group_add">
				<i class="plus icon"></i>
				添加权限组
			</div>
			<h2 class="ui left floated header"> 
				权限组管理
			</h2>
			<div class="ui clearing divider"></div>
			<div class="ui form">
				<div class=" inline fields"> 
					<label>权限组名称</label>
					<input type="text" placeholder="权限组名称" name="right_group_name">
					<div class="ui primary button icon floated">
						<i class="search icon"></i>
					</div>
				</div>
			</div>
			<div class="ui divider"></div>
			<table class="ui four column very compact structured blue hover table" id="data-table-center">
			  	<thead>
				    <tr>
				      	<th>权限组名</th>
				      	<th>状态</th>
				      	<th>操作</th>
				    </tr>
			  	</thead>
			  	<tbody>
				    <tr class="warning">
				      	<td>abc</td>
				      	<td>禁用</td>
				      	<td><a class="view">查看</a> <a class="edit">修改</a></td>
				    </tr>
				    <tr>
				      	<td>123</td>
				      	<td>启用</td>
				      	<td><a class="view">查看</a> <a class="edit">修改</a></td>
				    </tr>
				</tbody>
				<tfoot class="full-width"> 
					<tr> 
						<th colspan="3">
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
<script>
$(function(){ 
	$('#right_group_add').on('click',function(){ 
		$('#content').load('./set/rightedit.html');
	});
	$('.view').on('click',function(){ 
		$('#content').load('./set/rightedit.html');
	});
	$('.edit').on('click',function(){ 
		$('#content').load('./set/rightedit.html');
	});
})
</script>