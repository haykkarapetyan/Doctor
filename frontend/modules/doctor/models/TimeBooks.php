<?php

namespace frontend\modules\doctor\models;

use Yii;

/**
 * This is the model class for table "{{%time_books}}".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $reception_date
 * @property integer $is_irrelevant
 */
class TimeBooks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%time_books}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        [['first_name', 'last_name'], 'required'],
        [['reception_date'], 'safe'],
        [['is_irrelevant'], 'integer'],
        [['first_name', 'last_name'], 'string', 'max' => 255],
        [['phone'], 'string', 'max' => 32],
        [['email'], 'string', 'max' => 64],
        [['email', 'phone'], 'required', 'when' => function ($model) {
            if (empty($model->email) && empty($model->phone)) { return true; }
            return false;
        }, 'whenClient' => "function (attribute, value) {
            if($('#order-phone').val() == '' && $('#order-phone_other').val() == ''){
                $('.field-order-phone, .field-order-phone_other').addClass( 'has-error' ).find('.help-block-error').text( 'Необходимо заполнить хотя бы одно из полей «Телефон» или «Почта»');
                return true;
            } else { 
                $('.field-order-phone, .field-order-phone_other').removeClass( 'has-error' ).find('.help-block-error').text('');
                return false;
            }
        }", 'message' => 'Необходимо заполнить хотя бы одно из полей «Телефон» или «Почта»'],
        ];
    }
    public function attributeLabels()
    {
        return [
        'id' => 'ID',
        'first_name' => 'First Name',
        'last_name' => 'Last Name',
        'phone' => 'Phone',
        'email' => 'Email',
        'reception_date' => 'Reception Date',
        'is_irrelevant' => 'Is Irrelevant',
        ];
    }

}
