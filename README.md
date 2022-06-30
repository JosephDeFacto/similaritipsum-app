# similaritipsum-app

**PHP 7.4**

**Symfony 5.4.9**

## Installation - Docker (Ubuntu)
- Install docker: https://docs.docker.com/engine/install/ubuntu/
- Install docker-compose: https://docs.docker.com/compose/install/

*To make sure docker is installed, type in terminal: **docker -v**

*To make sure docker-compose is installed, type in terminal: **docker-compose -v**
 
## Project Setup
 - First, make sure you have composer installed on your system, if not, download and install from link: **https://getcomposer.org/download/**

 - Open the terminal, in your root directory, clone the project: *git clone **https://github.com/JosephDeFacto/similaritipsum-app.git***
 
 - After that, open the project directory
 
 - In root directory of the application, fire **composer install** (it will install all necessary dependencies needed for application to work)
 
 - Next, navigate to docker directory, and fire **docker-compose up -d** to start all docker containers
 
   <sub>To check state of your containers, type: **docker-compose ps -a**</sub>
 
 - Exit from docker directory, and in your root directory, fire: **symfony serve -d** to start the local web server

 - Open your browser and navigate to http://localhost:yourport/

 - If everything works fine, you should be able to see welcome page

 - If you want to stop docker from running, in your terminal navigate to docker directory, and fire: **docker-compose down**
 
 
 ## Application Usage
  **Get all results**
  - This endpoint retrieves results
  
  **HTTP request**
  > GET `http://localhost:8080/api/first/stream1/second/stream2`

  > Replace stream1 and stream2 with any of given parameters: bacon, cupidatat, lorem, tatcupidat

  > Example: `http://localhost:8080/api/first/bacon/second/lorem`

  **HTTP Response**
  
  `Status Code`  **200** 
  
   Example response:
   
      {
         "status":200,

         "charactersDifference":134,

         "message":"There is 134 difference in characters",

         "params":{"text1":"lorem","text2":"bacon"}
      }
      
      
For providing non-valid parameters, you'll get:
  
  `Status Code`  **404**

Example response:

     {
         "status":404,
         
         "message":"Not found",
         
         "params":{"text1":"aaaa","text2":"aaaa"}
     }
     
      
      
