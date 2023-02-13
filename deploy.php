<?php

declare(strict_types=1);

namespace Deployer;

echo "Paths in include path\n---\n";

$paths = explode(PATH_SEPARATOR, get_include_path());
foreach ($paths as $path) {
    echo "- $path\n";
}

require_once 'recipe/setono_dotenv.php';

// Config
set('repository', 'git@github.com:loevgaard/deployer.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);


// Hosts
host('staging')
    ->set('deploy_path', '~/public_html')
;

// Hooks
after('deploy:failed', 'deploy:unlock');
