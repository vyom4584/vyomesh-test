The changes made into the files are listed below.
------------------------------------------------------------
1. have crated MyBundle and inside that have create a List controller which is doing all the calling, have used the default list.html.twig file to show the result.

https://github.com/vyom4584/vyomesh-test/tree/master/tests/MyBundle


Have also mentioned the commands i have used for my test.
================================================================

  1 composer create-project symfony/framework-standard-edition symfony28 "2.8.*"
  2 composer require knplabs/github-api php-http/guzzle6-adapter
  3 cd symfony28/
  4 composer require knplabs/github-api php-http/guzzle6-adapter
  5 php app/console cache:clear
  6 php app/console cache:clear
  7 php app/console
  8 php app/console assets:install
  9 php app/console generate:bundle mybundle
  10  php app/console generate:bundle
  11  php app/console cache:clear
  12  composer update
  13  php app/console cache:clear
  14  php app/console assets:install
  15  php app/console cache:clear
  16  php app/console assets:install
  17  git init
  18  git clone
  19  git add .
  20  git commit -m "First commit"
  21  git push https://github.com/vyom4584/vyomesh-test.git --all
