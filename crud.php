<?php
include 'func.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ABoard - Music News, Chart, Photos & Videos | ABoard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/title-logo.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
</head>
<body class="body" style="background-color:black">
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
		<div class="container-fluid">
		  <a class="navbar-brand" href="index.html">ABoard</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link" href="index.html">Главная</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="chart.html">Чарт</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="video.html">Видео</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="news.html">Новости</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="about.html">О нас</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="crud.php">CRUD</a>
			  </li>
			</ul>
		  </div>
		</div>
	</nav>
	<div class="container" style="color:white; align: center;">
		<div class="row">
		<h1 style="text-align: center;">CRUD-приложение</h1>
		  <br><br>
			<div class="col mt-1">
				<?=@$success ?>
				<button class="btn btn-success mb-1" data-toggle="modal" data-target="#Modal"><i class="fa fa-user-plus"></i></button>
				<table class="table shadow "   style="color:white;">
					<thead class="thead-dark">
						<tr>
							<th>№</th>
							<th>Имя</th>
							<th>Фамилия</th>
							<th>Должность</th>
							<th>Действие</th>
						</tr>
						<?php foreach ($result as $value) { ?>
						<tr>
							<td><?=$value['id'] ?></td>
							<td><?=$value['name'] ?></td>
							<td><?=$value['last_name'] ?></td>
							<td><?=$value['pos'] ?></td>
							<td>
								<a href="?edit=<?=$value['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$value['id'] ?>"><i class="fa fa-edit"></i></a> 
								<a href="?delete=<?=$value['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?=$value['id'] ?>"><i class="fa fa-trash"></i></a>
								<?php require 'modal.php'; ?>
							</td>
						</tr> <?php } ?>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content shadow">
	      <div class="modal-header">
	        <h5 class="modal-title">Добавить пользователя</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="" method="post">
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="name" value="" placeholder="Имя">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="last_name" value="" placeholder="Фамилия">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="pos" value="" placeholder="Должность">
	        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
	        <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
	      </div>
	  		</form>
	    </div>
	  </div>
	</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="bootstrap5/js/bootstrap.js"></script>
</body>
</html>