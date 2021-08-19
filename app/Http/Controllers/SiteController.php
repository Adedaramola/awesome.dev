<?php

namespace App\Http\Controllers;

use App\Database;
use App\InsertTable;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class SiteController extends Controller
{
    public function index()
    {
        return $this->view('index');
    }

    public function resume()
    {
        return $this->view('resume');
    }

    public function contact()
    {
        return $this->view('contact');
    }

    public function sendEmail()
    {
        $database = (new Database())->connect();
        $table = new InsertTable($database);

        $name = htmlspecialchars($_REQUEST['name']);
        $email = htmlspecialchars($_REQUEST['email']);
        $body = htmlspecialchars($_REQUEST['message']);

        if ($table->insert($name, $email, $body)) {
            return $this->view('contact', [
                'success' => 'Message received successfully'
            ]);
        } else {
            return $this->view('contact', [
                'error' => 'Something went wrong'
            ]);
        }
    }

    public function notFound()
    {
        echo 'yes';
    }
}
