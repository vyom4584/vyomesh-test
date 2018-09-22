The changes made into the files are listed below.
------------------------------------------------------------
1. have crated MyBundle and inside that have create a List controller which is doing all the calling, have used the default list.html.twig file to show the result.

https://github.com/vyom4584/vyomesh-test/tree/master/tests/MyBundle


Have also mentioned the commands i have used for my test.
================================================================

composer create-project symfony/framework-standard-edition symfony28 "2.8.*"
composer require knplabs/github-api php-http/guzzle6-adapter
cd symfony28/
composer require knplabs/github-api php-http/guzzle6-adapter
php app/console cache:clear
php app/console cache:clear
php app/console
php app/console assets:install
php app/console generate:bundle mybundle
php app/console generate:bundle
php app/console cache:clear
composer update
php app/console cache:clear
php app/console assets:install
php app/console cache:clear
php app/console assets:install
git init
git clone
git add .
git commit -m "First commit"
git push https://github.com/vyom4584/vyomesh-test.git --all
