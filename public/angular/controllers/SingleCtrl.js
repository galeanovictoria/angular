angular.module('app.controllers')

.controller('SingleCtrl', function($scope, Tweet, $data, $routeParams) {
//	   console.log($routeParams)
    $data.tweets.$promise.then(function() {
        $scope.tweet = $data.tweets.find(t => t.id == $routeParams.id)                    
    })
})