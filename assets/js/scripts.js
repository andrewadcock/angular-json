angular.module('app', ['ngRoute'])
    .config(function ($routeProvider, $locationProvider) {
        $locationProvider.html5Mode(true);

        $routeProvider
            .when('/', {
                templateUrl: themeLocalized.partials + 'main.html',
                controller: 'MainLoop'
            })

            .when('/:ID', {
                templateUrl: themeLocalized.partials + 'post-content.html',
                controller: 'PostContent'
            });
    })

    .controller('MainLoop', function ($scope, $http, $routeParams) {
        $http({
            method: 'GET',
            url: 'wp-json/wp/v2/posts/'
        }).then(function (response) {
            // Set response to data, eg the list of posts
            $scope.posts = response.data;
            console.log(response);
        }, function (response) {
            //console.log('Error in http.get response' .  response)
        });
    })

    .controller('PostContent', function ($scope, $http, $routeParams) {
        console.log($routeParams.ID);
        // $http({
        //     type: 'GET',
        //     url: 'wp-json/wp/v2/posts/',
        // }).then(function (response) {
        //     // Set response to data, eg the list of posts
        //     $scope.posts = response.data;
        //     console.log('Success - single post');
        //     console.log($routeParams.ID);
        //     console.log(response.data);
        // }, function (response) {
        //     console.log('Error in http.get response' + $routeParams);
        // });
        $http.get('wp-json/wp/v2/posts/' + $routeParams.ID).success(function(res){
            $scope.post = res;
        });
    });