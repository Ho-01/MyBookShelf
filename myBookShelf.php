<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<title>practice</title>
		<script src="jquery-3.6.1.min.js"></script>
		<script>
			$(function(){
				$("body").css({
					"background-color" : "#808080"
				});
				
				$("section").css({
					"width" : "650px",
					"display" : "flex",
					"flex-direction" : "row",
					"justify-content" : "space-between"
				});
				
				$("#shelf1 div").css({
					"width" : "350px",
					"height" : "120px",
					"display" : "flex",
					"justify-content" : "center",
					"border" : "7px solid brown"
				});
				
				$("ul").css({
					"padding" : "0",
					"margin" : "0",
					"display" : "flex",
					"flex-direction" : "row",
					"justify-content" : "space-around",
					"align-items" : "flex-end",
					"width" : "300px",
					"height" : "120px"
				})
				
				$(".book").css({
					"box-sizing" : "border-box",
					"border" : "1px solid black",
					"width" : "50px",
					"height" : "75px",
					"background-color" : "#008080"
				});
				
				$(".book").on({
					"mouseover focus" : function(){
						$(this).css({
							"border":"2px solid yellow"
						});
					},
					"mouseout blur" : function(){
						$(this).css({
							"border" : "1px solid black"
						});
					},
					"click" : function(){
						$(".book").animate({
							"width" : "50px",
							"height" : "75px"
						})
						$(this).animate({
							"width" : "60px",
							"height" : "85px"
						},"fast");
						$("#screen").empty();
						$("#screen").append("<p>제목 : </p>");
					},
				});
				
				$("#screen").css({
					"border" : "1px solid black",
					"width" : "250px",
					"height" : "400px"
				});
			});
		</script>
		<style>
		</style>
	</head>
	<body>
		<h1>My BookShelf</h1>
		<section>
		<div id="shelf1">
			<div id="floor3">
				<ul>
					<a class="book" href="#" title="book1">book1</a>
					<a class="book" href="#" title="book2">book2</a>
					<a class="book" href="#" title="book3">book3</a>
					<a class="book" href="#" title="book4">book4</a>
					<a class="book" href="#" title="book5">book5</a>
				</ul>
			</div>
			<div id="floor2">
				<ul>
					<a class="book" href="#" title="book1">book1</a>
					<a class="book" href="#" title="book2">book2</a>
					<a class="book" href="#" title="book3">book3</a>
					<a class="book" href="#" title="book4">book4</a>
					<a class="book" href="#" title="book5">book5</a>
				</ul>
			</div>
			<div id="floor1">
				<ul>
					<a class="book" href="#" title="book1">book1</a>
					<a class="book" href="#" title="book2">book2</a>
					<a class="book" href="#" title="book3">book3</a>
					<a class="book" href="#" title="book4">book4</a>
					<a class="book" href="#" title="book5">book5</a>
				</ul>
			</div>
		</div>
		<div id = "screen">
			
		</div>
		</section>
	</body>
</html>