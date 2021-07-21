<?php

use Illuminate\Support\Facades\Route;
use App\Mail\InstadeckNewUserWelcomeMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Laravel Welcome Page
Route::get('/welcome', 'PageController@welcome')->name('welcome');

// Website main pages
Route::get('/', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/certificates', 'PageController@certificates')->name('certificates');
Route::get('/portfolios', 'PageController@portfolios')->name('portfolios');
Route::get('/blogs', 'PageController@blogs')->name('blogs');

// Students portfolio
Route::resource('/students', 'StudentController');

// InstaDeck portfolio
// Auth::routes();
Route::get('/instadeck/test-email', function () {
    Mail::to('herdiawand@yahoo.co.id')->send(new InstadeckNewUserWelcomeMail());
    return new InstadeckNewUserWelcomeMail();
});
Route::get('/instadeck/instagram-api', 'InstadeckInstagramApiController@index')->name('instadeck.api');
Route::get('/instadeck/instagram-api/callback', 'InstadeckInstagramApiController@callback')->name('instadeck.api.callback');
Route::get('/instadeck/login', 'InstadeckLoginController@showLoginForm')->name('instadeck.login.form');
Route::post('instadeck-login', 'InstadeckLoginController@login')->name('instadeck.login');
Route::get('/instadeck/register', 'InstadeckRegisterController@showRegistrationForm')->name('instadeck.register.form');
Route::post('instadeck-register', 'InstadeckRegisterController@register')->name('instadeck.register');
Route::post('instadeck-logout', 'InstadeckLoginController@logout')->name('instadeck.logout');
Route::get('/instadeck', 'InstadeckPostController@index')->name('instadeck.home');
Route::get('/instadeck/post/create', 'InstadeckPostController@create')->name('instadeck.post.create');
Route::post('/instadeck/post', 'InstadeckPostController@store')->name('instadeck.post.store');
Route::get('/instadeck/post/{post}', 'InstadeckPostController@show')->name('instadeck.post.show');
Route::get('/instadeck/profile/{username}', 'InstadeckProfileController@index')->name('instadeck.profile.show');
Route::get('/instadeck/profile/{username}/edit', 'InstadeckProfileController@edit')->name('instadeck.profile.edit');
Route::patch('/instadeck/profile/{username}', 'InstadeckProfileController@update')->name('instadeck.profile.update');
Route::post('/instadeck/follow/{user}', 'InstadeckFollowController@store');
Route::get('/instadeck/explore', 'InstadeckSearchController@index')->name('instadeck.explore');
Route::get('/instadeck/search', 'InstadeckSearchController@search')->name('instadeck.search');

// SisDeck portfolio
Route::get('/sisdeck/login', 'SisdeckLoginController@showLoginForm')->name('sisdeck.login.form');
Route::post('sisdeck-login', 'SisdeckLoginController@login')->name('sisdeck.login');
Route::get('/sisdeck/register', 'SisdeckRegisterController@showRegistrationForm')->name('sisdeck.register.form');
Route::post('sisdeck-register', 'SisdeckRegisterController@register')->name('sisdeck.register');
Route::post('sisdeck-logout', 'SisdeckLoginController@logout')->name('sisdeck.logout');
Route::get('/sisdeck', 'SisdeckController@index')->name('sisdeck.home');
Route::get('/sisdeck/academics', 'SisdeckAcademicController@index')->name('sisdeck.academics.index');
Route::post('/sisdeck/academics', 'SisdeckAcademicController@store')->name('sisdeck.academics.store');
Route::get('/sisdeck/academics/create', 'SisdeckAcademicController@create')->name('sisdeck.academics.create');
Route::get('/sisdeck/academics/{academic}', 'SisdeckAcademicController@show')->name('sisdeck.academics.show');
Route::delete('/sisdeck/academics/{academic}', 'SisdeckAcademicController@destroy')->name('sisdeck.academics.destroy');
Route::patch('/sisdeck/academics/{academic}', 'SisdeckAcademicController@update')->name('sisdeck.academics.update');
Route::get('/sisdeck/academics/{academic}/edit', 'SisdeckAcademicController@edit')->name('sisdeck.academics.edit');
Route::get('/sisdeck/attendances', 'SisdeckAttendanceController@index')->name('sisdeck.attendances.index');
Route::post('/sisdeck/attendances', 'SisdeckAttendanceController@store')->name('sisdeck.attendances.store');
Route::get('/sisdeck/attendances/create', 'SisdeckAttendanceController@create')->name('sisdeck.attendances.create');
Route::get('/sisdeck/attendances/{attendance}', 'SisdeckAttendanceController@show')->name('sisdeck.attendances.show');
Route::delete('/sisdeck/attendances/{attendance}', 'SisdeckAttendanceController@destroy')->name('sisdeck.attendances.destroy');
Route::patch('/sisdeck/attendances/{attendance}', 'SisdeckAttendanceController@update')->name('sisdeck.attendances.update');
Route::get('/sisdeck/attendances/{attendance}/edit', 'SisdeckAttendanceController@edit')->name('sisdeck.attendances.edit');
Route::get('/sisdeck/batches', 'SisdeckBatchController@index')->name('sisdeck.batches.index');
Route::post('/sisdeck/batches', 'SisdeckBatchController@store')->name('sisdeck.batches.store');
Route::get('/sisdeck/batches/create', 'SisdeckBatchController@create')->name('sisdeck.batches.create');
Route::get('/sisdeck/batches/{batch}', 'SisdeckBatchController@show')->name('sisdeck.batches.show');
Route::delete('/sisdeck/batches/{batch}', 'SisdeckBatchController@destroy')->name('sisdeck.batches.destroy');
Route::patch('/sisdeck/batches/{batch}', 'SisdeckBatchController@update')->name('sisdeck.batches.update');
Route::get('/sisdeck/batches/{batch}/edit', 'SisdeckBatchController@edit')->name('sisdeck.batches.edit');
Route::get('/sisdeck/class_assignments', 'SisdeckClassAssignmentController@index')->name('sisdeck.class_assignments.index');
Route::post('/sisdeck/class_assignments', 'SisdeckClassAssignmentController@store')->name('sisdeck.class_assignments.store');
Route::get('/sisdeck/class_assignments/create', 'SisdeckClassAssignmentController@create')->name('sisdeck.class_assignments.create');
Route::get('/sisdeck/class_assignments/{class_assignment}', 'SisdeckClassAssignmentController@show')->name('sisdeck.class_assignments.show');
Route::delete('/sisdeck/class_assignments/{class_assignment}', 'SisdeckClassAssignmentController@destroy')->name('sisdeck.class_assignments.destroy');
Route::patch('/sisdeck/class_assignments/{class_assignment}', 'SisdeckClassAssignmentController@update')->name('sisdeck.class_assignments.update');
Route::get('/sisdeck/class_assignments/{class_assignment}/edit', 'SisdeckClassAssignmentController@edit')->name('sisdeck.class_assignments.edit');
Route::get('/sisdeck/class_schedules', 'SisdeckClassScheduleController@index')->name('sisdeck.class_schedules.index');
Route::post('/sisdeck/class_schedules', 'SisdeckClassScheduleController@store')->name('sisdeck.class_schedules.store');
Route::get('/sisdeck/class_schedules/create', 'SisdeckClassScheduleController@create')->name('sisdeck.class_schedules.create');
Route::get('/sisdeck/class_schedules/{class_schedule}', 'SisdeckClassScheduleController@show')->name('sisdeck.class_schedules.show');
Route::delete('/sisdeck/class_schedules/{class_schedule}', 'SisdeckClassScheduleController@destroy')->name('sisdeck.class_schedules.destroy');
Route::patch('/sisdeck/class_schedules/{class_schedule}', 'SisdeckClassScheduleController@update')->name('sisdeck.class_schedules.update');
Route::get('/sisdeck/class_schedules/{class_schedule}/edit', 'SisdeckClassScheduleController@edit')->name('sisdeck.class_schedules.edit');
Route::get('/sisdeck/classes', 'SisdeckClassController@index')->name('sisdeck.classes.index');
Route::post('/sisdeck/classes', 'SisdeckClassController@store')->name('sisdeck.classes.store');
Route::get('/sisdeck/classes/create', 'SisdeckClassController@create')->name('sisdeck.classes.create');
Route::get('/sisdeck/classes/{class}', 'SisdeckClassController@show')->name('sisdeck.classes.show');
Route::delete('/sisdeck/classes/{class}', 'SisdeckClassController@destroy')->name('sisdeck.classes.destroy');
Route::patch('/sisdeck/classes/{class}', 'SisdeckClassController@update')->name('sisdeck.classes.update');
Route::get('/sisdeck/classes/{class}/edit', 'SisdeckClassController@edit')->name('sisdeck.classes.edit');
Route::get('/sisdeck/classrooms', 'SisdeckClassroomController@index')->name('sisdeck.classrooms.index');
Route::post('/sisdeck/classrooms', 'SisdeckClassroomController@store')->name('sisdeck.classrooms.store');
Route::get('/sisdeck/classrooms/create', 'SisdeckClassroomController@create')->name('sisdeck.classrooms.create');
Route::get('/sisdeck/classrooms/{classroom}', 'SisdeckClassroomController@show')->name('sisdeck.classrooms.show');
Route::delete('/sisdeck/classrooms/{classroom}', 'SisdeckClassroomController@destroy')->name('sisdeck.classrooms.destroy');
Route::patch('/sisdeck/classrooms/{classroom}', 'SisdeckClassroomController@update')->name('sisdeck.classrooms.update');
Route::get('/sisdeck/classrooms/{classroom}/edit', 'SisdeckClassroomController@edit')->name('sisdeck.classrooms.edit');
Route::get('/sisdeck/courses', 'SisdeckCourseController@index')->name('sisdeck.courses.index');
Route::post('/sisdeck/courses', 'SisdeckCourseController@store')->name('sisdeck.courses.store');
Route::get('/sisdeck/courses/create', 'SisdeckCourseController@create')->name('sisdeck.courses.create');
Route::get('/sisdeck/courses/{course}', 'SisdeckCourseController@show')->name('sisdeck.courses.show');
Route::delete('/sisdeck/courses/{course}', 'SisdeckCourseController@destroy')->name('sisdeck.courses.destroy');
Route::patch('/sisdeck/courses/{course}', 'SisdeckCourseController@update')->name('sisdeck.courses.update');
Route::get('/sisdeck/courses/{course}/edit', 'SisdeckCourseController@edit')->name('sisdeck.courses.edit');
Route::get('/sisdeck/days', 'SisdeckDayController@index')->name('sisdeck.days.index');
Route::post('/sisdeck/days', 'SisdeckDayController@store')->name('sisdeck.days.store');
Route::get('/sisdeck/days/create', 'SisdeckDayController@create')->name('sisdeck.days.create');
Route::get('/sisdeck/days/{day}', 'SisdeckDayController@show')->name('sisdeck.days.show');
Route::delete('/sisdeck/days/{day}', 'SisdeckDayController@destroy')->name('sisdeck.days.destroy');
Route::patch('/sisdeck/days/{day}', 'SisdeckDayController@update')->name('sisdeck.days.update');
Route::get('/sisdeck/days/{day}/edit', 'SisdeckDayController@edit')->name('sisdeck.days.edit');
Route::get('/sisdeck/faculties', 'SisdeckFacultyController@index')->name('sisdeck.faculties.index');
Route::post('/sisdeck/faculties', 'SisdeckFacultyController@store')->name('sisdeck.faculties.store');
Route::get('/sisdeck/faculties/create', 'SisdeckFacultyController@create')->name('sisdeck.faculties.create');
Route::get('/sisdeck/faculties/{faculty}', 'SisdeckFacultyController@show')->name('sisdeck.faculties.show');
Route::delete('/sisdeck/faculties/{faculty}', 'SisdeckFacultyController@destroy')->name('sisdeck.faculties.destroy');
Route::patch('/sisdeck/faculties/{faculty}', 'SisdeckFacultyController@update')->name('sisdeck.faculties.update');
Route::get('/sisdeck/faculties/{faculty}/edit', 'SisdeckFacultyController@edit')->name('sisdeck.faculties.edit');
Route::get('/sisdeck/levels', 'SisdeckLevelController@index')->name('sisdeck.levels.index');
Route::post('/sisdeck/levels', 'SisdeckLevelController@store')->name('sisdeck.levels.store');
Route::get('/sisdeck/levels/create', 'SisdeckLevelController@create')->name('sisdeck.levels.create');
Route::get('/sisdeck/levels/{level}', 'SisdeckLevelController@show')->name('sisdeck.levels.show');
Route::delete('/sisdeck/levels/{level}', 'SisdeckLevelController@destroy')->name('sisdeck.levels.destroy');
Route::patch('/sisdeck/levels/{level}', 'SisdeckLevelController@update')->name('sisdeck.levels.update');
Route::get('/sisdeck/levels/{level}/edit', 'SisdeckLevelController@edit')->name('sisdeck.levels.edit');
Route::get('/sisdeck/roles', 'SisdeckRoleController@index')->name('sisdeck.roles.index');
Route::post('/sisdeck/roles', 'SisdeckRoleController@store')->name('sisdeck.roles.store');
Route::get('/sisdeck/roles/create', 'SisdeckRoleController@create')->name('sisdeck.roles.create');
Route::get('/sisdeck/roles/{role}', 'SisdeckRoleController@show')->name('sisdeck.roles.show');
Route::delete('/sisdeck/roles/{role}', 'SisdeckRoleController@destroy')->name('sisdeck.roles.destroy');
Route::patch('/sisdeck/roles/{role}', 'SisdeckRoleController@update')->name('sisdeck.roles.update');
Route::get('/sisdeck/roles/{role}/edit', 'SisdeckRoleController@edit')->name('sisdeck.roles.edit');
Route::get('/sisdeck/semesters', 'SisdeckSemesterController@index')->name('sisdeck.semesters.index');
Route::post('/sisdeck/semesters', 'SisdeckSemesterController@store')->name('sisdeck.semesters.store');
Route::get('/sisdeck/semesters/create', 'SisdeckSemesterController@create')->name('sisdeck.semesters.create');
Route::get('/sisdeck/semesters/{semester}', 'SisdeckSemesterController@show')->name('sisdeck.semesters.show');
Route::delete('/sisdeck/semesters/{semester}', 'SisdeckSemesterController@destroy')->name('sisdeck.semesters.destroy');
Route::patch('/sisdeck/semesters/{semester}', 'SisdeckSemesterController@update')->name('sisdeck.semesters.update');
Route::get('/sisdeck/semesters/{semester}/edit', 'SisdeckSemesterController@edit')->name('sisdeck.semesters.edit');
Route::get('/sisdeck/shifts', 'SisdeckShiftController@index')->name('sisdeck.shifts.index');
Route::post('/sisdeck/shifts', 'SisdeckShiftController@store')->name('sisdeck.shifts.store');
Route::get('/sisdeck/shifts/create', 'SisdeckShiftController@create')->name('sisdeck.shifts.create');
Route::get('/sisdeck/shifts/{shift}', 'SisdeckShiftController@show')->name('sisdeck.shifts.show');
Route::delete('/sisdeck/shifts/{shift}', 'SisdeckShiftController@destroy')->name('sisdeck.shifts.destroy');
Route::patch('/sisdeck/shifts/{shift}', 'SisdeckShiftController@update')->name('sisdeck.shifts.update');
Route::get('/sisdeck/shifts/{shift}/edit', 'SisdeckShiftController@edit')->name('sisdeck.shifts.edit');
Route::get('/sisdeck/students', 'SisdeckStudentController@index')->name('sisdeck.students.index');
Route::post('/sisdeck/students', 'SisdeckStudentController@store')->name('sisdeck.students.store');
Route::get('/sisdeck/students/create', 'SisdeckStudentController@create')->name('sisdeck.students.create');
Route::get('/sisdeck/students/{student}', 'SisdeckStudentController@show')->name('sisdeck.students.show');
Route::delete('/sisdeck/students/{student}', 'SisdeckStudentController@destroy')->name('sisdeck.students.destroy');
Route::patch('/sisdeck/students/{student}', 'SisdeckStudentController@update')->name('sisdeck.students.update');
Route::get('/sisdeck/students/{student}/edit', 'SisdeckStudentController@edit')->name('sisdeck.students.edit');
Route::get('/sisdeck/teachers', 'SisdeckTeacherController@index')->name('sisdeck.teachers.index');
Route::post('/sisdeck/teachers', 'SisdeckTeacherController@store')->name('sisdeck.teachers.store');
Route::get('/sisdeck/teachers/create', 'SisdeckTeacherController@create')->name('sisdeck.teachers.create');
Route::get('/sisdeck/teachers/{teacher}', 'SisdeckTeacherController@show')->name('sisdeck.teachers.show');
Route::delete('/sisdeck/teachers/{teacher}', 'SisdeckTeacherController@destroy')->name('sisdeck.teachers.destroy');
Route::patch('/sisdeck/teachers/{teacher}', 'SisdeckTeacherController@update')->name('sisdeck.teachers.update');
Route::get('/sisdeck/teachers/{teacher}/edit', 'SisdeckTeacherController@edit')->name('sisdeck.teachers.edit');
Route::get('/sisdeck/times', 'SisdeckTimeController@index')->name('sisdeck.times.index');
Route::post('/sisdeck/times', 'SisdeckTimeController@store')->name('sisdeck.times.store');
Route::get('/sisdeck/times/create', 'SisdeckTimeController@create')->name('sisdeck.times.create');
Route::get('/sisdeck/times/{time}', 'SisdeckTimeController@show')->name('sisdeck.times.show');
Route::delete('/sisdeck/times/{time}', 'SisdeckTimeController@destroy')->name('sisdeck.times.destroy');
Route::patch('/sisdeck/times/{time}', 'SisdeckTimeController@update')->name('sisdeck.times.update');
Route::get('/sisdeck/times/{time}/edit', 'SisdeckTimeController@edit')->name('sisdeck.times.edit');
Route::get('/sisdeck/transactions', 'SisdeckTransactionController@index')->name('sisdeck.transactions.index');
Route::post('/sisdeck/transactions', 'SisdeckTransactionController@store')->name('sisdeck.transactions.store');
Route::get('/sisdeck/transactions/create', 'SisdeckTransactionController@create')->name('sisdeck.transactions.create');
Route::get('/sisdeck/transactions/{transaction}', 'SisdeckTransactionController@show')->name('sisdeck.transactions.show');
Route::delete('/sisdeck/transactions/{transaction}', 'SisdeckTransactionController@destroy')->name('sisdeck.transactions.destroy');
Route::patch('/sisdeck/transactions/{transaction}', 'SisdeckTransactionController@update')->name('sisdeck.transactions.update');
Route::get('/sisdeck/transactions/{transaction}/edit', 'SisdeckTransactionController@edit')->name('sisdeck.transactions.edit');
Route::get('/sisdeck/users', 'SisdeckUserController@index')->name('sisdeck.users.index');
Route::post('/sisdeck/users', 'SisdeckUserController@store')->name('sisdeck.users.store');
Route::get('/sisdeck/users/create', 'SisdeckUserController@create')->name('sisdeck.users.create');
Route::get('/sisdeck/users/{user}', 'SisdeckUserController@show')->name('sisdeck.users.show');
Route::delete('/sisdeck/users/{user}', 'SisdeckUserController@destroy')->name('sisdeck.users.destroy');
Route::patch('/sisdeck/users/{user}', 'SisdeckUserController@update')->name('sisdeck.users.update');
Route::get('/sisdeck/users/{user}/edit', 'SisdeckUserController@edit')->name('sisdeck.users.edit');