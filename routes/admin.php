<?php
/* Admin Routes */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

	//User Home page.
	Route::get('/', 'Admin\AdminController@index')->name('admin-index');

	//User management Route.
	Route::get('/user-management', 'Admin\AdminController@usermanagement_index')->name('user-management');

	//User Resource Controller
	Route::resource('users', 'Admin\UserController');

	//Role Resource Controller
	Route::resource('roles', 'Admin\RoleController');

	//Permission Resource Controller
	Route::post('/assign-permission', 'Admin\PermissionController@assign_permission_post')->name('assign-permission-post');
	
	Route::post('/assign-permission-del', 'Admin\PermissionController@assign_permission_del')->name('assign-permission-del');

	Route::resource('permissions', 'Admin\PermissionController');

	/* Activity Log Routes */
	Route::get('/activity-log', 'AdminController@activitylog_index')->name('activitylog_index');

	/* Todo List Routes */
	//Todo custom update
	Route::post('/todos_update', 'admin\TodoController@todos_update')->name('todos_update');
	
	//Todo custom delete	
	Route::post('/todos_delete', 'admin\TodoController@todos_delete')->name('todos_delete');

	//Task done undone, change status
	Route::post('/task_status', 'admin\TodoController@task_status')->name('task_status');

	//Task sorting
	Route::post('/task_sort', 'admin\TodoController@task_sort')->name('task_sort');

	/*Todo Resource*/
	Route::resource('todos', 'admin\TodoController');

	/* Pages resource */
	Route::resource('pages', 'Admin\PageController');	

	Route::get('analytics', 'Admin\AnalyticsController@analytics')->name('analytics');

	Route::get('calender', 'Admin\GoogleCalender@all_events')->name('all_events');

	Route::get('contact_email','Admin\ContactController@contact_email')->name('contact_email');
	Route::post('admin_reply_email','Admin\ContactController@admin_reply_email')->name('admin_reply_email');

});

	//Admin Login Authentication
	Route::get('/admin-login', 'Admin\AuthController@login_index')->name('adminlogin_index');
	Route::post('/admin-login', 'Admin\AuthController@login_post')->name('admin_login_post');

	//Logout
	Route::get('/admin-logout', 'Admin\AuthController@logout')->name('logout');



?>