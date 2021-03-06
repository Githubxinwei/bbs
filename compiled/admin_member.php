<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META content=ie=7 http-equiv=x-ua-compatible>
<LINK rel=stylesheet type=text/css href="<?php echo $domain_resource; ?>/admin/admincp.css">
<META name=GENERATOR content="MSHTML 8.00.6001.19120"></HEAD>
<BODY>
<SCRIPT type=text/JavaScript>
var admincpfilename = 'admin_index.php', IMGDIR = '<?php echo $domain_resource; ?>/images', STYLEID = '1', VERHASH = 'pFT', IN_ADMINCP = true, ISFRAME = 1, STATICURL='<?php echo $domain_resource; ?>/', SITEURL = '', JSPATH = '<?php echo $domain_resource; ?>/js/';
</SCRIPT>
<SCRIPT type=text/javascript src="js/common.js"></SCRIPT>
<SCRIPT type=text/javascript src="js/admincp.js"></SCRIPT>
<SCRIPT type=text/javascript>
if(ISFRAME && !parent.document.getElementById('leftmenu')) {
	redirect(admincpfilename + '?frames=yes&' + document.URL.substr(document.URL.indexOf(admincpfilename) + 10));
}
</SCRIPT>

	<div id="append_parent"></div>
	<div class="container" id="cpcontainer">
		<script type="text/JavaScript">parent.document.title = '<?php echo $title; ?>';</script>
		<div class="itemtitle"><h3>用户管理</h3></div>
		<form name="cpform" method="post" autocomplete="off" action="" id="cpform" >
		<table class="tb tb2 ">
			<tr>
				<th colspan="15" class="partition">
				共有<strong> <?php echo $userC; ?> </strong>条用户记录
				</th>
			</tr>
			<tr class="header">
				<th></th>
				<th>用户名</th>
				<th>积分</th>
				<th>注册时间</th>
				<th>用户类型</th>
				<th></th>
			</tr>
			<?php if(is_array($UserList)){foreach($UserList AS $ukey=>$uval) { ?>
			<tr class="hover">
				<td class="td25"><input type="checkbox" name="uidarray[]" value="2" class="checkbox"></td>
				<td><a href="#" target="_blank"><?php echo $uval['username']; ?></a></td>
				<td><?php echo $uval['grade']; ?></td>
				<td><?php echo formatTime($uval['regtime'], false); ?></td>
				<td><b><?php echo userGroup($uval['udertype']); ?></b></td>
				<td>
					<a href="admin_member_show.php?id=<?php echo $uval['uid']; ?>#grade" class="act">积分</a>
					<a href="admin_member_show.php?id=<?php echo $uval['uid']; ?>" class="act">详情</a>
					<?php if($uval['allowlogin']){?>
					<a href="admin_member.php?id=<?php echo $uval['uid']; ?>&lock=j" class="act">解锁</a>
					<?php } else { ?>
					<a href="admin_member.php?id=<?php echo $uval['uid']; ?>&lock=s" class="act">锁定用户</a>
					<?php }?>
				</td>
			</tr>
			<?php }}?>
			<tr>
				<td colspan="15">
					<div class="fixsel">
						<input type="submit" class="btn" id="submit_submit" name="submit" title="按 Enter 键可删除" value="删除" />
					</div>
				</td>
			</tr>
			</table>
		</form>
	
	</div>
</BODY>
</HTML>
