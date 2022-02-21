# UptimeRobot.com / HealthChecks.io
Scripts used together with [Uptime Robot](https://uptimerobot.com) and/or Health [HealthChecks.io](https://HealthChecks.io).

#healthecksio.php
This script acts as a bridge between the two services and will let Uptime Robot take care of the alerting. In my case I have only used it to include my HealthChecks.io services onto the Uptime Robot dashboard.
Just replace the readonly HealthChecks.io-API-key (or add multiples), and put it on a PHP-able web server, then add a monitor on UptimeRobot with keyword-check. Set the keyword to look for to be the slug-name_up. For example webserver_up. If HealthChecks.io flags the service as down, it will be named "websever_down", and UptimeRobot will fail to find the keyword and mark the service as down on its side.

