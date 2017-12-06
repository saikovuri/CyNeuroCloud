<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBot extends Controller
{
	public function getResponse(Request $request) {
		$user_input = "\"" . $request->input('user_input') . "\"";
		$context = "\"" . $request->input('context') . "\"";

		$command = "/Applications/XAMPP/htdocs/CyNeuroCloud/CyNeuroLaravel/app/Http/Controllers/ChatBotService.py " . $user_input . ' ' . $context;
		exec($command, $output, $status);

		if ($status != 0) {
			//echo "error" . $status;
			$temp = "error : " . $status . '~';
			// Append all the lines to the temp variable
			foreach ($output as $line) {
				$temp = $temp . $line . '~';
				//echo $line;
				//echo "<br>";
			}
		} else {
			$temp = "";
			// Append all the lines to the temp variable
			foreach ($output as $line) {
				$temp = $temp . $line . '~';
				//echo $line;
				//echo "<br>";
			}

		}

		return $temp;
	}
}
