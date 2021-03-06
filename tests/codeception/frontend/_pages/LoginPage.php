<?php

namespace tests\codeception\frontend\_pages;

use yii\codeception\BasePage;
use app\models\frontend\LoginForm;

/**
 * Represents login page
 * @property \tests\codeception\frontend\AcceptanceTester|\tests\codeception\frontend\FunctionalTester|\tests\codeception\backend\AcceptanceTester|\tests\codeception\backend\FunctionalTester $actor
 */
class LoginPage extends BasePage
{
    public $route = 'auth/login';

    /**
     * @param string $username
     * @param string $password
     */
    public function login($username, $password)
    {
        $loginForm = new LoginForm();

        $this->actor->fillField('input[name="' . $loginForm->formName() . '[username]"]', $username);
        $this->actor->fillField('input[name="' . $loginForm->formName() . '[password]"]', $password);
        $this->actor->click('login-button');
    }
}
