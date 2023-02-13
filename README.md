# deployer-issue-3485

This is a reproducer of this issue: [github.com/deployphp/deployer/issues/3485](https://github.com/deployphp/deployer/issues/3485)

To reproduce, do the following:

```shell
composer install
vendor/bin/dep deploy
php include_path.php
```
