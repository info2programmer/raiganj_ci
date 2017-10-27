<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//This is student routes

$route['(:any)-student-(:any)-details']= 'student/student_details/$1/$2'; // For Individual Student  1st parameter is year and 2nd paramer is student id
$route['(:any)-change-status-(:any)-student-(:any)']='student/cancel_student/$1/$2/$3'; //For Cancel Student 1st parameter is year and 2nd paramer is student_id and last parameter is status
$route['(:any)-transfer-(:any)-student-(:any)']='student/transfer_student/$1/$2/$3'; //For transfer student 1st parameter is year and 2nd paramer is student_id and last parameter is status
$route['former-student-list']='student/former_student';//For former student list
$route['cancel-student-list']='student/cancel_student_list';//For cancel student list


//This is Routine Routes
$route['daywise-college-routine']='calendar/index'; // For Event View Like Hollydays, Importent Days
$route['manage-class-routine']='routine/manage_routine'; //For Create Routine
$route['edit-(:num)-routine']='routine/edit_routine/$1'; //For edit routine view
$route['delete-(:num)-routine']='routine/delete_routine/$1'; //For delete routine 
$route['show-routine-details']='routine/routine_list'; //For View Class Routine

// This is Fee Routes
$route['student-fees-data']='fees/index';
$route['print-(:num)-profile-of-(:any)-year-stream-(:num)']='fees/challan/$1/$2/$3';
$route['view-cash-book']='fees/gen_report'; //Generate Report Data
$route['finance-report']='fees/finance_report'; //Load Report Listing View
$route['ledger-listing']='fees/view_ledger'; //Load Ledger Listing View
$route['ledger-report']='fees/ledger_report';//Generate Legder Report In This Route 
$route['income-expenditure-report']='fees/imcome_expenditure_report'; // Load imcome expenditure report view
$route['sub-fund-report']='fees/sub_fund_report';
$route['receipt-payment']='fees/receipt_payment';
$route['daily-collection']='fees/daily_report';


//This is Report Routes
// $route['financial-transaction-reports']='report/financial_data_report';
 $route['strem-wise-student-cast']='report/strem_wise_student_cast';
 $route['student-cast-report']='report/cast_wise_all_student_report';


 //This is Librery Routes
 $route['manage-books']='library/manage_books';
 $route['delete-book-(:num)']='library/delete_book/$1';


