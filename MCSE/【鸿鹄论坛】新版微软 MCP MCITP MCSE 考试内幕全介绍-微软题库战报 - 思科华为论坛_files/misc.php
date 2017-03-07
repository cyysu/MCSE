if($('secqaa_qSRt84M7')) {
	var sectpl = seccheck_tpl['qSRt84M7'] != '' ? seccheck_tpl['qSRt84M7'].replace(/<hash>/g, 'codeqSRt84M7') : '';
	var sectplcode = sectpl != '' ? sectpl.split('<sec>') : Array('<br />',': ','<br />','');
	var string = '<input name="secqaahash" type="hidden" value="qSRt84M7" />' + sectplcode[0] + '验证问答' + sectplcode[1] + '<input name="secanswer" id="secqaaverify_qSRt84M7" type="text" autocomplete="off" style="width:100px" class="txt px vm" onblur="checksec(\'qaa\', \'qSRt84M7\')" />' +
		' <a href="javascript:;" onclick="updatesecqaa(\'qSRt84M7\');doane(event);" class="xi2">换一个</a>' +
		'<span id="checksecqaaverify_qSRt84M7"><img src="' + STATICURL + 'image/common/none.gif" width="16" height="16" class="vm" /></span>' +
		sectplcode[2] + '思科的英文名字是 （ cisco ）括号内是答案' + sectplcode[3];
	evalscript(string);
	$('secqaa_qSRt84M7').innerHTML = string;
}