$(document).ready(function() {
	$("#name").text(translate['TEXT']['TXT_NAME']);
	$("#forgot").text(translate['TEXT']['TXT_FORGOT']);
	$("#ent_email").attr("placeholder", translate['FIELD']['FLD_EMAIL']);
	$("#ent_name").attr("placeholder", translate['FIELD']['FLD_NAME']);
	$("#pass").text(translate['TEXT']['TXT_PASS']);
	$("#pass_rpt").text(translate['TEXT']['TXT_PASS_AGAIN']);
	$("#bt_reg").text(translate['BUTTONS']['BTN_REGISTER']);
	$("#bt_log").text(translate['BUTTONS']['BTN_LOGIN']);
	$("#tit_reg").text(translate['TITLES']['TIT_REGISTER']);
	$("#tit_rst").text(translate['TITLES']['TIT_RST_EMAIL']);
	$("#photo").text(translate['TEXT']['TXT_PHOTO']);
	$("#bt_rst").text(translate['BUTTONS']['BTN_RST_PASS']);
	$("#ent_msg").attr("placeholder", translate['FIELD']['FLD_ENTER']);
	$("#bt_send").text(translate['BUTTONS']['BTN_SEND']);
	$("#history").text(translate['TEXT']['TXT_CHAT']);
	$("#usr").text(translate['TEXT']['TXT_USER']);
});