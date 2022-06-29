# similaritipsum-app

# Installation - Docker (Ubuntu)
- Install docker: https://docs.docker.com/engine/install/ubuntu/
- Install docker-compose: https://docs.docker.com/compose/install/

*To make sure docker is installed, type in terminal: docker -v*

*To make sure docker-compose is installed, type in terminal: docker-compose -v*
 
 # Project Setup
 - First of all, make sure you have composer installed on your system, if not, download and install from link: https://getcomposer.org/download/

 - Open the terminal, in your root directory, clone the project: *git clone https://github.com/JosephDeFacto/similaritipsum-app.git*
 
 - After that, open the project directory
 
 - In root directory of the application, fire composer install (it will install all necessary dependencies needed for application to work)
 
 - In your terminal, navigate to docker directory, and fire docker-compose up to start all docker containers
 
 - Exit from docker, and in your root directory, fire: symfony serve -d, you'll get url of your app, for example: http://127.0.0.1:8002
 
 
  # Application Usage

  - Open API: http://localhost:8080/api/first/stream1/second/stream1
  
  - Available filenames: bacon, cupidatat, lorem, tatcupidat
  
  - Replace stream1 and stream2 with any filenames above to get results
