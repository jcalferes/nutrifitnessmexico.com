var app = angular.module('data-slider', []);
function control($scope, $http) {

    $scope.imagenes = [];

    $http.get('dameNombres.php')
            .success(function (data) {
                $scope.imagenes = eval(data);
                console.log(data)
            })
            .error(function (data) {
                console.log('Error: ' + data);
            });
}