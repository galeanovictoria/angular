angular.module('app.controllers')

.controller('HomeCtrl', function($scope, Tweet, $data) {
	$scope.tweets = $data.tweets

	$scope.deleteTweet = function(tweet) {
		Tweet.delete({id: tweet.id}, function() {
			$data.tweets = $scope.tweets.filter(t => t.id !== tweet.id)
            $scope.tweets = $data.all
		})
	}
})