<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;
use frontend\models\Company;
use frontend\models\Profile;

/**
 * Signup form
 */
class SignupEmpForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $firstName;
    public $lastName;
    public $basicSpec;
    public $addSpec;
    public $skills;
    public $avatarUrl;
    public $company_id;
    public $compname;
    public $comptextInfo;
    public $compavatarUrl;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            [['firstName', 'lastName'], 'required'],
            [['basicSpec', 'addSpec', 'company_id'], 'integer'],
            [['skills'], 'string'],
            [['firstName', 'lastName', 'avatarUrl'], 'string', 'max' => 255],

            [['compname'], 'required'],
            [['comptextInfo'], 'string'],
            [['compname', 'compavatarUrl'], 'string', 'max' => 255]

        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */

    public function attributeLabels()
    {
        return [
            'username' => 'Имя пользователя',
        ];
    }



    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save(); //? $user : null;
        
        $company = new Company();
        $company->name = $this->compname;
        $company->textInfo = $this->comptextInfo;
        $company->avatarUrl = $this->compavatarUrl;

        return $company->save(); //? $company : null;
        
        $profile = new Profile();
        $profile->id = $user->id;
        $profile->firstName = $this->firstName;
        $profile->lastName = $this->lastName;
        $profile->basicSpec = $this->basicSpec;
        $profile->addSpec = $this->addSpec;
        $profile->skills = $this->skills;
        $profile->avatarUrl = $this->avatarUrl;
        $profile->company_id = $company->id;

        return $profile->save(); //? $profile : null;
    }
}
