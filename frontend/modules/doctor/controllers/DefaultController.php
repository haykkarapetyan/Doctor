<?php

namespace frontend\modules\doctor\controllers;
use Yii;
use yii\web\Controller;
use frontend\modules\doctor\models\TimeBooks;

/**
 * Default controller for the `Doctor` module
 */
class DefaultController extends Controller
{
    public $layout = "main";
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new TimeBooks();
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //$model->reception_date=Yii::$app->formatter->asDate($model->reception_date, "dd-mm-yyyy");
            $model->setAttribute('reception_date', date('Y-m-d H:i:s', strtotime($model->reception_date)));
            $model->save(false);
            Yii::$app->session->setFlash('success', "Your Time submited");
            return $this->redirect(['index']);
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }
}
