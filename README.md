
```
   _____           _                 _____      _           _____  _    _ _____  
  / ____|         | |               |  __ \    (_)         |  __ \| |  | |  __ \ 
 | (___  _   _ ___| |_ ___ _ __ ___ | |  | |    _ _ __     | |__) | |__| | |__) |
  \___ \| | | / __| __/ _ \ '_ ` _ \| |  | |   | | '_ \    |  ___/|  __  |  ___/ 
  ____) | |_| \__ \ ||  __/ | | | | | |__| |   | | | | |   | |    | |  | | |     
 |_____/ \__, |___/\__\___|_| |_| |_|_____/    |_|_| |_|   |_|    |_|  |_|_|     
          __/ |                                                                  
         |___/                                                                                                                                                               
```

# SystemD PHP Wrapper

[![pipeline status](https://git.shitware.xyz/pupax/systemd-wrapper/badges/master/pipeline.svg)](https://git.shitware.xyz/pupax/systemd-wrapper/commits/master) [![coverage report](https://git.shitware.xyz/pupax/systemd-wrapper/badges/master/coverage.svg)](https://git.shitware.xyz/pupax/systemd-wrapper/commits/master)


```php

$wrapper = new \Pupax\SystemdWrapper();
$wrapper->start('nginx'); // Start nginx service
$wrapper->stop('nginx'); // Stop nginx service
$wrapper->restart('nginx'); // Restart nginx
$wrapper->reload('nginx'); // Reload nginx

$timers = $wrapper->listTimers(); // Get SystemD timers
$sockets = $wrapper->listSockets(); // Get SystemD sockets
$units = $wrapper->listUnits(); // Get SystemD units
$systemInfo = $wrapper->show(); // Get SystemD infos
$unitInfo = $wrapper->show('nginx'); // Get nginx info

```