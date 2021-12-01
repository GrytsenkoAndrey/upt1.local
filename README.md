## "Tasks" Test Project

# How To Deploy it Locally

1. create project directory ```mkdir upt.local ```
2. go to the directory ```cd upt.local```
3. unzip an archive to the created directory
4. add to the **/etc/hosts** ```127.0.0.1 upt.local www.upt.local```
5. run in the terminal ```sudo chown -R $USER:$USER ./```
6. run in the terminal ```docker-compose up -d```
7. wait until containers running
8. run in the terminal ```docker exec -it upt-app bash```
9. run in the terminal (into the container) ```php artisan migrate```
10. open browser and visit the [page](http://upt.local/task/create)
11. [here](http://upt.local:8081) you can find Adminer
