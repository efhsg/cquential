# C-Quential assigments  

All assignments are implemented in a vanilla Laravel 8 environment with Docker.

## Installation
- Check out project
- Start a docker container in the project directory
```
docker run -ti --rm -v $(pwd):/var/www lorisleiva/laravel-docker /bin/bash
``` 
- Run composer in the docker container
```
composer install
```

## Notes
- All sources can be found in app/Domain
- All tests (tests/Unit) can be run with Artisan (./artisan test) 
- All assignments are implemented as Artisan commands (./artisan |grep cquential)
