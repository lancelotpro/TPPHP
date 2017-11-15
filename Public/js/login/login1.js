/**
	验证码ajax
*/
$(function (){
	$("#verifycode").change(function (){
		var url = $(this).attr("accesskey");
		var data = {code:$(this).val(),date:new Date()};
		$.post(url,data,function (data){
			if(data == true){
				alert("验证通过");
			}else{
				alert("验证失败");
			}
		});
	});


	/**
		验证码重置
	*/
	$("#verify_img").click(function (){
		var url = $(this).attr("accesskey");
		var time = new Date();
		$(this).attr("src",url+"/"+time);
	});


});