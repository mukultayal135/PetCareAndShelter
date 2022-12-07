<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/angular.min.js">
	</script>

	<script>
		var module = angular.module("kuchbhiModule", []);
		module.controller("mycontroller", function($scope, $http) {

			$scope.jsonArray = []; //empty json array

			$scope.fetchJsonData = function() {
				loadJSON();

			}
			function loadJSON(){
				$http.get("json-fetch-all.php").then(okFx, notOkFx);

				function okFx(result) //call back function
				{
					//alert(JSON.stringify(result.data));
					$scope.jsonArray = result.data; //local to global assignment
				}

				function notOkFx(result) {
					alert(result.data);
				}
			}
			//----------------------------------------
			$scope.doDelete=function(uid)
			{
				var resp=confirm("R U sure?");
				if(resp==false)
					return;
				$http.get("ajax-del.php?uid="+uid).then(okFx, notOkFx);

				function okFx(result) //call back function
				{
					alert(JSON.stringify(result.data));
					loadJSON();
					
				}

				function notOkFx(result) {
					alert(result.data);
				}
			}
			//-=-=-=-=-=-=-=-=-=-=-=-=-=
			$scope.selObj;
			$scope.showDetails=function(index)
			{
				$scope.selObj=$scope.jsonArray[index];
				//alert(JSON.stringify($scope.selObj));
			}

		});

	</script>
</head>

<body ng-app="kuchbhiModule" ng-controller="mycontroller">
	<center>
		<input type="button" value="Fetch All" ng-click="fetchJsonData();">

		<div class="container">
			<div class="row">
				<div class="col-md-3" ng-repeat="obj in jsonArray">
					<div class="card">
						<img class="card-img-top" src="uploads/{{obj.ppic}}" height="100" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">User id:{{obj.uid}}</h5>
							<p class="card-text">Password: {{obj.pwd}}</p>
							<p class="card-text">Mobile: {{obj.mobile}}</p>
							<a href="#" class="btn btn-primary" ng-click="doDelete(obj.uid);">Delete</a>
							<button class="btn btn-primary" 
							data-toggle="modal" data-target="#detailsModal" 
							ng-click="showDetails($index);" >Details</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</center>
	
	<!-- Modal -->
	 <!-- Modal -->
<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table width="100%" border="1" rules="all">
        	<tr>
        		<td colspan="2" align="center"><img src="uploads/{{selObj.ppic}}" width="100" height="100" alt=""></td>
        	</tr>
        	<tr>
        		<td>User id</td><td>{{selObj.uid}} </td>
        		
        	</tr>
        	<tr>
        		<td>Password</td><td>{{selObj.pwd}} </td>
        		
        	</tr>
        	<tr>
        		<td>Mobile</td><td>{{selObj.mobile}} </td>
        		
        	</tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	

</body>

</html>
