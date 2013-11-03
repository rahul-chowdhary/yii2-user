<?php namespace dektrium\user;

use \yii\base\Module;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class Web extends Module
{
    /**
     * @var string an ID that uniquely identifies this module among other modules which have the same [[module|parent]].
     */
    public $id = 'dektrium-user';

    /**
     * @var string the namespace that controller classes are in.
     */
    public $controllerNamespace = '\dektrium\user\controllers';

    /**
     * @var array custom module parameters (name => value).
     */
    public $params = [
        'afterRegistrationRedirectUrl' => ['/user/auth/login'],
        // The time you want the user will be remembered without asking for credentials.
        // By default rememberFor is two weeks
        'rememberFor' => 1209600
    ];
}