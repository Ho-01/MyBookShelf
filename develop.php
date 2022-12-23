<html>
<head>
	<title>develop tab</title>
	<script src="jquery-3.6.1.min.js"></script>
	<script>
		$(function(){
			$("div").css({
				"display" : "flex",
				"flex-direction" : "row",
				"align-items" : "center"
			});
			$("button").css({
				"height" : "40px"
			});
			$("div").on("click","#b1",function(){
				var c = $("#b1").attr('class');
				if(c=="off"){
					$("#b1").attr("class","on");
					$("#b1").text("commit");
					var value = $("#b1").prev().text();
					$("#b1").prev().remove();
					$("#b1").before("<input type='number' value=''></input>");
					$("#b1").prev().attr("value",value);
				}else if(c=="on"){
					$("#b1").attr("class","off");
					$("#b1").text("edit");
					var value = $("#b1").prev().val();
					$("#b1").prev().remove();
					$("#b1").before("<p></p>");
					$("#b1").prev().text(value);
					var a = parseInt($("#b1").prev().text());
					var b = parseInt($("#b2").prev().text());
					var result = (b/a*100).toFixed(2);
					$("progress").attr("value",result);
					$("label").text("독서 진척도 : "+result+"%");
				}
			});
			$("div").on("click","#b2",function(){
				var c = $("#b2").attr('class');
				if(c=="off"){
					$("#b2").attr("class","on");
					$("#b2").text("commit");
					var value = $("#b2").prev().text();
					$("#b2").prev().remove();
					$("#b2").before("<input type='number' value=''></input>");
					$("#b2").prev().attr("value",value);
				}else if(c=="on"){
					$("#b2").attr("class","off");
					$("#b2").text("edit");
					var value = $("#b2").prev().val();
					$("#b2").prev().remove();
					$("#b2").before("<p></p>");
					$("#b2").prev().text(value);
					var a = parseInt($("#b1").prev().text());
					var b = parseInt($("#b2").prev().text());
					var result = (b/a*100).toFixed(2);
					$("progress").attr("value",result);
					$("label").text("독서 진척도 : "+result+"%");
				}
			});
		});
	</script>
</head>
<body>
	<div><h3>총 페이지 : </h3><p>200</p><button id="b1" class="off">edit</button></div>
	<div><h3>현재 페이지 : </h3><p>145</p><button id="b2" class="off">edit</button></div>
	<label>독서 진척도 : ?%</label><br>
	<progress id=progress max="100" value="0"></progress>
</body>
</html>