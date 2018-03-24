<?php

class TopupController extends GameBaseController {

    public $layout = 'default';

    public function actionRedeem() {
        $statuserId = Yii::app()->request->getParam('statuserId');
        $productId = Yii::app()->request->getParam('productId');

        if (isset($_POST['productId'])) {
            if ($productId >= 2) {
                $statuserModel = Statuser::model()->findByPk($statuserId);
                $moneyBefore = $statuserModel->money;
                switch ($productId) {
                    case 2:
                        $amountCoin = 1000;
                        break;
                    case 3:
                        $amountCoin = 7000;
                        break;
                    case 4:
                        $amountCoin = 18000;
                        break;
                }
                $statuserModel->money += $amountCoin;
                if ($statuserModel->save()) {
                    $topupModel = new Topup;
                    $topupModel->statuserId = $statuserId;
                    $topupModel->product_id = $productId;
                    $topupModel->amount = $amountCoin;
                    $topupModel->createdDate = date('Y-m-d H:i:s');
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }
                    $topupModel->ip_address = $ip;
                    if ($topupModel->save()) {
                        $moneylogModel = new Moneylog;
                        $moneylogModel->statuserId = $statuserId;
                        $moneylogModel->moneyBefore = $moneyBefore;
                        $moneylogModel->moneyAfter = $statuserModel->money;
                        $moneylogModel->type = 0;
                        $moneylogModel->createdDate = date('Y-m-d H:i:s');
                        if ($moneylogModel->save()) {
                             Yii::app()->user->setFlash('success', "Redeem Coins Success!");
                        } else {
                            Yii::app()->user->setFlash('error', "Fail 1");
                        }
                    } else {
                        Yii::app()->user->setFlash('error', "Fail 2");
                    }
                } else {
                    Yii::app()->user->setFlash('error', "Fail 3");
                }
            } else if ($productId == 1) {
                $statuserModel = Statuser::model()->findByPk($statuserId);
                $statuserModel->ads = 0;
                if ($statuserModel->save()) {
                    $topupModel = new Topup;
                    $topupModel->statuserId = $statuserId;
                    $topupModel->product_id = 1;
                    $topupModel->amount = 35;
                    $topupModel->createdDate = date('Y-m-d H:i:s');
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }
                    $topupModel->ip_address = $ip;
                    if ($topupModel->save()) {
                        Yii::app()->user->setFlash('success', "Redeem No Ads Success!");
                    } else {
                        Yii::app()->user->setFlash('error', "Fail 4");
                    }
                } else {
                   Yii::app()->user->setFlash('error', "Fail 5");
                }
            }
        }

        $this->render('redeem', array(
            'statuserId' => $statuserId,
            'productId' => $productId,
        ));
    }

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Topup;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Topup'])) {
            $model->attributes = $_POST['Topup'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->topupId));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Topup'])) {
            $model->attributes = $_POST['Topup'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->topupId));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Topup');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Topup('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Topup']))
            $model->attributes = $_GET['Topup'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Topup::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'topup-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
