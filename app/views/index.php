<!DOCTYPE html>
<html lang="en" ng-app>
	<head>
		<title>Site | index</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body ng-controller="TodosController">
		<h1 class="text-center">
			Todos
			<small ng-if="remaining()">({{ remaining() }} remaining)</small>
		</h1>
		
		<div class="container">
			<div class="row">
				<input type="text" name="filter todos" id="input" class="form-control" placeholder="filter todos" ng-model="search">
			</div>
			<div class="row">
				<ul>
					<li ng-repeat="todo in todos | filter:search">
						<div class="checkbox">
							<label>
								<input type="checkbox" value="" ng-model="todo.completed">
								{{ todo.body }}
							</label>
						</div>
					</li>
				</ul>
			</div>
			<div class="row">
				<form action="" method="POST" class="form-inline" role="form" ng-submit="addTodo()">
				
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<input type="text" class="form-control" id="" placeholder="Add new task" ng-model="newTodoText">
					</div>				
					<button type="add" class="btn btn-primary">Add</button>
				</form>
			</div>
		</div>
		

		<!-- Angular -->
		<script src="/js/angular.min.js"></script>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<!-- custom js -->
		<script src="/js/main.js"></script>
	</body>
</html>