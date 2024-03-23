<?php

namespace backend\controllers;

use backend\models\About;
use backend\models\AboutSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use Yii;
use yii\base\Request;
/**
 * AboutController implements the CRUD actions for About model.
 */
class AboutController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            // Memeriksa apakah pengguna memiliki id = 4
                            return Yii::$app->user->identity->username == 'admin';
                        },
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all About models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AboutSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single About model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new About model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
//     public function actionCreate()
// {
//     $model = new About();
    
//     if (Yii::$app->request->isPost) {
//         $model->gambar = UploadedFile::getInstance($model, 'gambar');
    
//         if ($model->gambar && $model->validate()) {
//             $imageName = 'backend/img/' . $model->gambar->baseName . '.' . $model->gambar->extension;
    
//             if ($model->gambar->saveAs($imageName)) {
//                 $model->gambar = $imageName;
    
//                 if ($model->save()) {
//                     return $this->redirect(['view', 'id' => $model->id]);
//                 } else {
//                     // Tanggapan jika penyimpanan model gagal
//                     Yii::$app->session->setFlash('error', 'Gagal menyimpan model. Alasan: ' . implode(', ', $model->firstErrors));
//                 }
//             } else {
//                 // Tanggapan jika gagal menyimpan file gambar
//                 Yii::$app->session->setFlash('error', 'Gagal menyimpan file gambar. Alasan: File gambar tidak dapat disimpan.');
//             }
//         } else {
//             // Tanggapan jika file gambar tidak valid
//             Yii::$app->session->setFlash('error', 'File gambar tidak valid. Alasan: ' . implode(', ', $model->firstErrors));
//         }
//     }
    
//     if (!$model->validate()) {
//         // Check errors for debugging
//         Yii::error($model->errors);
//     }
    

//     return $this->render('create', [
//         'model' => $model,
//     ]);
// }

// public function actionCreate()
// {
//     $model = new About();

//     if ($this->request->isPost) {
//         $model->gambar = UploadedFile::getInstance($model, 'gambar'); // mengambil instance file gambar

//         if ($model->load($this->request->post()) && $model->validate()) {
//             if ($model->gambar) {
//                 $model->gambar->saveAs('path/to/save/' . $model->gambar->baseName . '.' . $model->gambar->extension);
//                 // simpan path file gambar di database jika diperlukan
//             }

//             $model->save();
//             return $this->redirect(['view', 'id' => $model->id]);
//         }
//     } else {
//         $model->loadDefaultValues();
//     }

//     return $this->render('create', [
//         'model' => $model,
//     ]);
// }

public function actionCreate()
{
    $model = new About();

    if ($model->load(Yii::$app->request->post())) {
        $model->gambar = UploadedFile::getInstance($model, 'gambar');
        if ($model->gambar && $model->validate()) {
            $model->gambar->saveAs('skydash' . $model->gambar->baseName . '.' . $model->gambar->extension);
            $model->gambar = '' . $model->gambar->baseName . '.' . $model->gambar->extension;
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
    }

    return $this->render('create', [
        'model' => $model,
    ]);
}


    
   
public function actionUpdate($id)
{
    $model = $this->findModel($id);

    if ($model->load(Yii::$app->request->post())) {
        $model->gambar = UploadedFile::getInstance($model, 'gambar');

        if ($model->gambar && $model->validate()) {
            $model->gambar->saveAs('skydash' . $model->gambar->baseName . '.' . $model->gambar->extension);
            $model->gambar = '' . $model->gambar->baseName . '.' . $model->gambar->extension;
        }

        if ($model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
    }

    return $this->render('update', [
        'model' => $model,
    ]);
}
    
    

    /**
     * Deletes an existing About model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the About model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return About the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = About::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
