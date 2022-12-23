<!DOCTYPE html>
<html>
	<head>
		<!-- 부트스트랩 css 사용 -->
		<link rel="stylesheet" href="bootstrap.min.css">
		<!-- 부트스트랩 js 사용 -->
		<script type="text/javascript" src="bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">
		<title>practice</title>
		<script src="jquery-3.6.1.min.js"></script>
		<script>
			$(function(){
				$("body").css({
					"background-image" : "url(img/bg-wood.jpg)",
					"display" : "flex",
					"flex-direction" : "column",
					"align-items" : "center",
					"height" : "100%",
					"overflow" : "auto"
				});
				
				$("#shelf1").css({
					"padding-top" : "150px",
					"display" : "flex",
					"flex-direction" : "column",
					"height" : "100%"
				});
				
				$("ul").css({
					"padding" : "0",
					"margin" : "0",
					"display" : "flex",
					"flex-direction" : "row",
					"justify-content" : "flex-start",
					"align-items" : "flex-end",
					"width" : "100%",
					"height" : "100%"
				})
				
				$(".book").css({
					"box-sizing" : "border-box",
					"width" : "30px",
					"height" : "85px",
					"background-image" : "url(img/book1.jpg)"
				});
				
				
				
				$("#add").on({
					"click" : function(){
						alert();
						$("#shelf1").append("<div><ul>생성</ul></div>");
						$("#shelf1 div:last-child").addClass("floor");
					},
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
				});
			});
		</script>
		<style>
		</style>
	</head>
	<body>	
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			  <div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">title of this book</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				...
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		<nav class="navbar fixed-top navbar-dark bg-dark">
			<div class="container-fluid  d-flex flex-column">
				<a class="navbar-brand">My BookShelf</a>
				<form class="d-flex" role="search">
			  		<input class="form-control me-2" style="width: 400px;" type="search" placeholder="Search" aria-label="Search">
			  		<button class="btn btn-outline-success" type="submit">Search</button>
					<button id="add" class="btn btn-outline-primary" type="button">Add Floor</button>
				</form>
		  	</div>
		</nav>
		<section>
		<div id="shelf1">
			<div class="floor">
				<ul>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
				</ul>
			</div>
			<div class="floor">
				<ul>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
				</ul>
			</div>
			<div class="floor">
				<ul>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
					<button type="button" class="btn btn-primary book" data-bs-toggle="modal" data-bs-target="#exampleModal">book1</button>
				</ul>
			</div>
		</div>
		</section>
	</body>
</html>