function displayform() {
	document.getElementById('form').style.display="block";
}
$(function()
{
	$(".closebtn").click(function()
	{
		$('#form').css("display","none");
	});
	$("#signupbtn").click(function()
	{
		$("#signinform").css("display","none");
		$("#signupform").css("display","block");
	});
	$("#loginbtn").click(function()
	{
		$("#signupform").css("display","none");
		$("#signinform").css("display","block");
	});
	$("#signupsbmt").click(function()
	{
		var x=$("#pass").val();
		var y=$("#mat_pass").val();
		if(x!=y)
			alert("password matching failed!!");

	});
});