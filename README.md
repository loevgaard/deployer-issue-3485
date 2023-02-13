# deployer-issue-3485

This is a reproducer of this issue: [github.com/deployphp/deployer/issues/3485](https://github.com/deployphp/deployer/issues/3485)

To reproduce, do the following:

```shell
composer install
php include_path.php
vendor/bin/dep deploy
```

The first command will output something like:

```text
Paths in include path
---
- .
- /usr/share/php
- /home/runner/work/deployer-issue-3485/deployer-issue-3485/vendor/setono/deployer-dotenv/src
```

The next will output something like:

```text
Paths in include path
---
- phar
- ///home/runner/work/deployer-issue-3485/deployer-issue-3485/vendor/deployer/deployer/dep/bin/..
- .
- /usr/share/php

                                    
  Command "deploy" is not defined.  
```

The first has the `vendor/setono/deployer-dotenv/src` in its `include_path`, but the second doesn't. This is the issue.
