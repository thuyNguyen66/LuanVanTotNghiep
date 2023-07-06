<?php

class View_Student
{
	public function show_head_left($info)
	{
		require_once 'config/config.php';
		include 'res/templates/student/head_left.php';
	}
	public function show_dashboard($tests,$scores)
	{
		include 'res/templates/student/dashboard.php';
	}
	public function show_chat()
	{
		include 'res/templates/student/chat.html';
	}
	public function show_all_chat()
	{
		include 'res/templates/student/all_chat.html';
	}
	public function show_notifications()
	{
		include 'res/templates/student/notifications.html';
	}
	public function show_exam($test,$min,$sec)
	{
		include 'res/templates/student/exam.php';
	}
	public function show_result($score,$result)
	{
		include 'res/templates/student/result.php';
	}
	public function show_practice($practice,$min,$sec)
	{
		include 'res/templates/student/practice.php';
	}
	public function show_practice_result($score,$result)
	{
		include 'res/templates/student/practice_result.php';
	}
	public function show_about()
    {
        require_once 'config/config.php';
        include 'res/templates/shared/about.php';
    }
    public function show_foot()
    {
        require_once 'config/config.php';
        include 'res/templates/shared/foot.php';
    }
    public function show_profiles($profile)
    {
        include 'res/templates/shared/profiles.php';
    }
    public function show_404()
    {
        include 'res/templates/shared/404.html';
    }
	public function show_practice_panel()
    {
        include 'res/templates/student/practice_panel.html';
    }

	public function show_statistic_panel()
    {
        include 'res/templates/student/statistic.html';
    }
}


