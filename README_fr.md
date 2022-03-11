# MyBB pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/mybb.svg)](https://dash.yunohost.org/appci/app/mybb) ![](https://ci-apps.yunohost.org/ci/badges/mybb.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/mybb.maintain.svg)  
[![Installer MyBB avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=mybb)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer MyBB rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

MyBB is the free and open source forum software powering thousands of engaging, vibrant, and unique communities across the internet.

**Version incluse :** 1.8.30~ynh1

**Démo :** https://demomybb.tk/

## Captures d'écran

![](./doc/screenshots/screenshot.png)

## Avertissements / informations importantes

* How to post-install:
    * The database credentials are send to the admin be email.

* How to upgrade:
	* Remove the lock file `sudo rm /var/www/mybb/install/lock`
    * and follow the post install `https://www.domain.ltd/mybb/install/upgrade.php`

## Documentations et ressources

* Site officiel de l'app : https://mybb.com/
* Documentation officielle de l'admin : https://docs.mybb.com/1.8/administration/
* Dépôt de code officiel de l'app : https://github.com/mybb/mybb
* Documentation YunoHost pour cette app : https://yunohost.org/app_mybb
* Signaler un bug : https://github.com/YunoHost-Apps/mybb_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/mybb_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/mybb_ynh/tree/testing --debug
ou
sudo yunohost app upgrade mybb -u https://github.com/YunoHost-Apps/mybb_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps