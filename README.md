## "Tasks" Test Project

# How To Deploy it Locally

1. create project directory ```mkdir upt.local ```
2. go to the directory ```cd upt.local```
3. unzip an archive to the created directory
4. make copy ```.env.example``` to ```.env```
5. set **DB_USERNAME** and **DB_PASSWORD**
6. add to the **/etc/hosts** ```127.0.0.1 upt.local www.upt.local```
7. run in the terminal ```sudo chown -R $USER:$USER ./```
8. run in the terminal ```docker-compose up -d```
9. wait until containers running
10. run in the terminal ```docker exec -it upt-app bash```
11. run in the terminal (you're in the container) ```composer install```
12. run in the terminal (into the container) ```npm install```
13. run in the terminal (into the container) ```npm run prod```
14. run in the terminal (into the container) ```php artisan migrate```
15. open browser and visit the [page](http://upt.local:80/task/create)
16. [here](http://upt.local:8081) you can find Adminer
