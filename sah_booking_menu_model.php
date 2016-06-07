<?php

class Sah_booking_menu_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function getMenu()
	{
		$menu=array();
		//auth ==> Employee
		$menu['emp']['SAH Booking']=array();
		$menu['emp']['SAH Booking']['Room Booking Form'] = site_url('sah_booking/booking/form');
		$menu['emp']['SAH Booking']['Track Booking Status'] = site_url('sah_booking/booking/track_status');
		$menu['emp']['SAH Booking']['Booked History'] = site_url('sah_booking/booking/history');

		$menu['stu']['SAH Booking']=array();
		$menu['stu']['SAH Booking']['Room Booking Form'] = site_url('sah_booking/booking/form');
		$menu['stu']['SAH Booking']['Track Booking Status'] = site_url('sah_booking/booking/track_status');
		$menu['stu']['SAH Booking']['Booked History'] = site_url('sah_booking/booking/history');

		$menu['hod']['SAH Booking'] = site_url('sah_booking/booking_request/app_list/hod');

		$menu['hos']['SAH Booking'] = site_url('sah_booking/booking_request/app_list/hos');

		$menu['dsw']['SAH Booking'] = site_url('sah_booking/booking_request/app_list/dsw');

		$menu['est_ar']['SAH Booking']=array();
		$menu['est_ar']['SAH Booking']['Booking Requests'] = site_url('sah_booking/booking_request/app_list/est_ar');
		$menu['est_ar']['SAH Booking']['Room Availability'] = site_url('sah_booking/management/building_status/est_ar');
		$menu['est_ar']['SAH Booking']['Search Booking History'] = site_url('sah_booking/guest_details/search/est_ar');

		$menu['est_da4']['SAH Booking'] = array();
		$menu['est_da4']['SAH Booking']['Room Booking Form (Others)'] = site_url('sah_booking/booking/other_bookings_form');
		$menu['est_da4']['SAH Booking']['Room Allotment'] = site_url('sah_booking/booking_request/est_da4_app_list');
		$menu['est_da4']['SAH Booking']['Room Availability'] = site_url('sah_booking/management/building_status/est_da4');
		$menu['est_da4']['SAH Booking']['Room Planning'] = site_url('sah_booking/management/room_management');
		$menu['est_da4']['SAH Booking']['Search Booking History'] = site_url('sah_booking/guest_details/search/est_da4');

		$menu['est_da5']['SAH Booking']['Guest Details'] = site_url('sah_booking/guest_details');
		$menu['est_da5']['SAH Booking']['Search Booking History'] = site_url('sah_booking/guest_details/search/est_da5');
		return $menu;
	}
}
