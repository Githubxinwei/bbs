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
		<div class="itemtitle"><h3>友情链接</h3></div>
		<table class="tb tb2 " id="tips">
			<tr>
				<th  class="partition">技巧提示</th>
			</tr>
			<tr>
				<td class="tipsblock" s="1">
					<ul id="tipslis">
						<li>未填写文字说明的项目将以紧凑型显示。</li>
					</ul>
				</td>
			</tr>
		</table>
		<form name="cpform" method="post" autocomplete="off" action="" id="cpform" >
		<table class="tb tb2 ">
		<tr class="header">
			<th></th><th>显示顺序</th>
			<th>站点名称</th>
			<th>站点 URL</th>
			<th>文字说明(可选)</th>
			<th>logo 地址(可选)</th>
		</tr>
		<?php if(is_array($textUrl)){foreach($textUrl AS $key=>$val) { ?>
		<tr class="hover">
			<td class="td25"><input type="checkbox" class="checkbox" name="delete[]" value="<?php echo $val['lid']; ?>" /></td>
			<td class="td28"><input type="text" class="txt" name="displayorder[<?php echo $val['lid']; ?>]" value="<?php echo $val['displayorder']; ?>" size="3" /></td>
			<td><input type="text" class="txt" name="name[<?php echo $val['lid']; ?>]" value="<?php echo $val['name']; ?>" size="15" /></td>
			<td><input type="text" class="txt" name="url[<?php echo $val['lid']; ?>]" value="<?php echo $val['url']; ?>" size="20" /></td>
			<td class="td26"><input type="text" class="txt" name="description[<?php echo $val['lid']; ?>]" value="<?php echo $val['description']; ?>" size="30" /></td>
			<td><input type="text" class="txt" name="logo[<?php echo $val['lid']; ?>]" value="<?php echo $val['logo']; ?>" size="20" /></td>
		</tr>
		<?php }}?>
		<tr>
			<td class="td25"></td>
			<td colspan="15">
			<input type="submit" class="btn" id="submit_linksubmit" name="dellink" value="删除" />
			<input type="submit" class="btn" id="submit_linksubmit" name="editlink" value="修改" />
			</td>
		</tr>
		</table>
		</form>
		<form name="cpform" method="post" autocomplete="off" action="" id="cpform" >
		<table class="tb tb2 ">
		<tr class="header">
			<th></th><th>显示顺序</th>
			<th>站点名称</th>
			<th>站点 URL</th>
			<th>文字说明(可选)</th>
			<th>logo 地址(可选)</th>
		</tr>
		<tr>
			<td></td>
			<td colspan="3"><div><a class="addtr">添加友情链接</a></div></td>
		</tr>
		<tr class="hover">
			<td class="td25"></td>
			<td class="td28"><input type="text" class="txt" name="displayorder" value="" size="3" /></td>
			<td><input type="text" class="txt" name="name" value="" size="15" /></td>
			<td><input type="text" class="txt" name="url" value="" size="20" /></td>
			<td class="td26"><input type="text" class="txt" name="description" value="" size="30" /></td>
			<td><input type="text" class="txt" name="logo" value="" size="20" /></td>
		</tr>
		<tr>
			<td class="td25"></td>
			<td colspan="15"><div class="fixsel"><input type="submit" class="btn" id="submit_linksubmit" name="addlink" value="添加" /></div></td>
		</tr>
		</table>
		</form>
	</div>
</BODY>
</HTML>
