<?php

namespace kouosl\assignment\controllers\frontend;

use Yii;
use kouosl\assignment\models\Assignment;
use kouosl\user\models\User;

use kouosl\assignment\models\AssignmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * AssignmentController implements the CRUD actions for Assignment model.
 */
class AssignmentsController extends Controller
{
    

    /**
     * Lists all Assignment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $assignments = Assignment::find()->asArray()->all();
        $type = array();
        $users = array();

        foreach ($assignments as $key => $row)
        {
            $type[$key] = $row['type'];
        } 
		
        array_multisort($type, SORT_ASC, $assignments);
		
        foreach ($assignments as $key => $row)
        {
            $users[$key] = $this->findModel($row['author'])['username'];
        }
        return $this->render('index',[ 'model' => $assignments,'users' => $users]);
    }


    /**
     * Finds the Assignment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Assignment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
