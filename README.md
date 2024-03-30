# XDP   - Rock, Paper, Scissors, Lizard, Spock

A command-line application for playing Rock, Paper, Scissors, Lizard, Spock. Created as a code test for XDP Limited.

## Authors
Ryan fawcett - <rpfawcett88@gmail.com>

## Getting Started

### Dependencies

* PHP 8.1
    - Ctype PHP Extension
    - cURL PHP Extension
    - DOM PHP Extension
    - Fileinfo PHP Extension
    - Filter PHP Extension
    - Hash PHP Extension
    - Mbstring PHP Extension
    - OpenSSL PHP Extension
    - PCRE PHP Extension
    - PDO PHP Extension
    - Session PHP Extension
    - Tokenizer PHP Extension
    - XML PHP Extension
* Git
* Composer 2
* XDebug (for test coverage report)

Alternatively, you can build a docker image from the project which will have all of the dependencies set up.

### Installation

Clone the project and navigate to the newly created directory

```
git clone https://github.com/RyanFawcett1988/xdp-test.git
cd xdp-test
```

Alternatively, you can download the project as a zip file and extract it

#### With Docker
```
# Build Docker image
docker built -t xdp-test .

# Run the Docker container
docker run -dp 80:80 xdp-test

# connect to the running container
docker exec -it <container name> /bin/bash
```
#### Without Docker
You will have to manually install the dependencies with composer
```
composer install
```
Since this is a CLI application, there is no requirement to build front end assets with npm

### Tests
To run tests, use laravel artisan's built-in test command
```
php artisan test
```
For coverage (requires xdebug in coverage mode), you can also run with the coverage flag
```
php artisan test --coverage
```

### Playing the game
```
php artisan game:play
```
