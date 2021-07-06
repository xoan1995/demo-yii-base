<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .my-input {
            -webkit-transition: all linear 0.5s;
            transition: all linear 0.5s;
            background: transparent;
        }

        .my-input.ng-invalid {
            color: white;
            background: red;
        }
    </style>
</head>

<body>
    <script>
        let app = angular.module("ShoppingList", []);
        app.controller("carController", function($scope) {
            $scope.cars = ["Kia morning", "Mercedes", "Lexu"];
            $scope.addCar = function() {
                $scope.cars.push($scope.car);
            }
        })
    </script>
    <div ng-app="ShoppingList" ng-controller="carController">
        <input type="text" ng-model="car">
        <button ng-click="addCar()">
            Add
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="x in cars">
                    <th scope="row">1</th>
                    <td>{{x}}</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>