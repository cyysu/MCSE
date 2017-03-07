if($('seccode_cSRt84M7')) {
	if(!$('vseccode_cSRt84M7')) {
		var sectpl = seccheck_tpl['cSRt84M7'] != '' ? seccheck_tpl['cSRt84M7'].replace(/<hash>/g, 'codecSRt84M7') : '';
		var sectplcode = sectpl != '' ? sectpl.split('<sec>') : Array('<br />',': ','<br />','');
		var string = '<input name="seccodehash" type="hidden" value="cSRt84M7" /><input name="seccodemodid" type="hidden" value="forum::viewthread" />' + sectplcode[0] + '验证码' + sectplcode[1] + '<input name="seccodeverify" id="seccodeverify_cSRt84M7" type="text" autocomplete="off" style="ime-mode:disabled;width:100px" class="txt px vm" onblur="checksec(\'code\', \'cSRt84M7\', 0, null, \'forum::viewthread\')" />' +
			' <a href="javascript:;" onclick="updateseccode(\'cSRt84M7\');doane(event);" class="xi2">换一个</a>' +
			'<span id="checkseccodeverify_cSRt84M7"><img src="' + STATICURL + 'image/common/none.gif" width="16" height="16" class="vm" /></span>' +
			sectplcode[2] + '<span id="vseccode_cSRt84M7">请输入下面动画图片中的字符<br /><img onclick="updateseccode(\'cSRt84M7\')" width="100" height="30" src="misc.php?mod=seccode&update=48274&idhash=cSRt84M7" class="vm" alt="" /></span>' + sectplcode[3];
		evalscript(string);
		$('seccode_cSRt84M7').innerHTML = string;
	} else {
		var string = '请输入下面动画图片中的字符<br /><img onclick="updateseccode(\'cSRt84M7\')" width="100" height="30" src="misc.php?mod=seccode&update=48274&idhash=cSRt84M7" class="vm" alt="" />';
		evalscript(string);
		$('vseccode_cSRt84M7').innerHTML = string;
	}
	
}