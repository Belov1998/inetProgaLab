<?php

class Controller_Action extends Controller
{

	function action_index()
	{	
            $this->view->generate('action_view.php', 'template_view.php');
	}
        
}