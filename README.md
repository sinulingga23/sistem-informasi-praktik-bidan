CONTAINER ID   IMAGE                           COMMAND                  CREATED         STATUS                    PORTS                                                                                    NAMES
a275f65e7bc5   sail-8.2/app                    "start-container"        3 minutes ago   Up 50 seconds             0.0.0.0:80->80/tcp, :::80->80/tcp, 0.0.0.0:5173->5173/tcp, :::5173->5173/tcp, 8000/tcp   example-app-laravel.test-1
ecd3c9adc7ab   seleniarm/standalone-chromium   "/opt/bin/entry_poin…"   3 minutes ago   Up 50 seconds             4444/tcp, 5900/tcp                                                                       example-app-selenium-1
52af3bb5cee0   redis:alpine                    "docker-entrypoint.s…"   3 minutes ago   Up 51 seconds (healthy)   0.0.0.0:6379->6379/tcp, :::6379->6379/tcp                                                example-app-redis-1
bd1ef57c0460   mysql/mysql-server:8.0          "/entrypoint.sh mysq…"   3 minutes ago   Up 51 seconds (healthy)   0.0.0.0:3306->3306/tcp, :::3306->3306/tcp, 33060-33061/tcp                               example-app-mysql-1
52cadcd620c5   getmeili/meilisearch:latest     "tini -- /bin/sh -c …"   3 minutes ago   Up 51 seconds (healthy)   0.0.0.0:7700->7700/tcp, :::7700->7700/tcp                                                example-app-meilisearch-1
1d498512035f   axllent/mailpit:latest          "/mailpit"               3 minutes ago   Up 50 seconds             0.0.0.0:1025->1025/tcp, :::1025->1025/tcp, 0.0.0.0:8025->8025/tcp, :::8025->8025/tcp     example-app-mailpit-1
