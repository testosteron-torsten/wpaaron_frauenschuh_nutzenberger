<?php
namespace Deployer;

require 'recipe/common.php';

set('repository', 'https://github.com/testosteron-torsten/wpaaron_frauenschuh_nutzenberger.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

set('shared_files', ['public/wp-config.php']);
set('shared_dirs', ['public/wp-content/uploads']);

host('193.170.119.194')
 ->set('remote_user', 'admin')
 ->set('port','5412')
 ->set('deploy_path', '~/admin/aron');

task('deploy', [
 'deploy:prepare',
 'deploy:publish',
]);

after('deploy:failed', 'deploy:unlock');

//execution: vendor/bin/dep deploy
