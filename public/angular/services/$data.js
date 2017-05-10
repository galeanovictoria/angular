angular.module('app.services')

.factory('$data', function(Tweet) {

	console.log('$tweets is run')

//	var allTweets = Tweet.query()

//	return allTweets
    
    return {
        tweets: Tweet.query()
    }

})