<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->name." send this message : </br>".$model->message,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting me. I will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}	
	
	public function actionAbout()
	{
		$this->render('about');
	}
	public function actionSkills()
	{
		$this->render('skills');
	}
	
	public function actionResume()
	{
		$this->render('resume');
	}
	
	public function actionPage(){
	
		$this->render('about');
	
	}
	
	public function actionJeca()
	{
		$this->render('pages/jeca');
	}
	
	/**
	 * Displays the mappage
	 */
	public function actionMap()
	{
		
		$this->render('map');
	}
	
	

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionLoginFacebook()
	{
	
		Yii::import('application.components.facebook.Facebook');
			
		$facebook = new Facebook(array(
			'appId'  => '131095360377219',
			'secret' => '7cbd6d6765962626df1c713fabb98c03',
		));
		
		$user = $facebook->getUser();
		if(!$user)
			$this->redirect($facebook->getLoginUrl());
		
		if ($user) {
			$model=new LoginForm;
			try {
				// Proceed knowing you have a logged in user who's authenticated.
				$user_profile = $facebook->api('/me');
				$model->attributes = array(
					"username"=>$user_profile['username'],
					"password"=>"facebook_".$user_profile['id'],
					"rememberMe"=>0
				);
				//print_r($model->attributes);
				if($model->login())
					$this->redirect(Yii::app()->user->returnUrl);
								
				
			} catch (FacebookApiException $e) {
				error_log($e);
				$user = null;
			}
		}

		$this->redirect(Yii::app()->homeUrl);
		
		
	}
}