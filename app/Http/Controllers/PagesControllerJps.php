<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerJps extends Controller
{
    public function main() {
        $name = "Paul";

        return view("layout.layout", compact('name'));
    }

    public function dashboard() {
        return view('dashboard');
    }

    public function contactus() {
        return view('contactus');
    }

    public function aboutus() {
        return view('aboutus');
    }

    public function control() {
        $grade = 85;
        return view('controlstructure', compact('grade'));
    }

   public function client($ClientID = null) {
    $clientJPS = array (
        array("ClientID" => "C1", "Fname" => "Paul", "Lname" => "Sales", "ContactNo" => "096129030", "EmailAddress" => "sales@gmail.com"),
        array("ClientID" => "C2", "Fname" => "Orland", "Lname" => "Sayson", "ContactNo" => "096129031", "EmailAddress" => "sayson@gmail.com"),
        array("ClientID" => "C3", "Fname" => "Jimwell", "Lname" => "Mendoza", "ContactNo" => "096129091", "EmailAddress" => "mendoz@gmail.com"),
        array("ClientID" => "C4", "Fname" => "Jheus", "Lname" => "Valdez", "ContactNo" => "096129031", "EmailAddress" => "valdez@gmail.com"),
        array("ClientID" => "C5", "Fname" => "Wilbur", "Lname" => "Grefaldo", "ContactNo" => "096129031", "EmailAddress" => "greafl@gmail.com"),
        array("ClientID" => "C6", "Fname" => "Angel", "Lname" => "Sanchez", "ContactNo" => "096129031", "EmailAddress" => "sanxhe@gmail.com"),
        array("ClientID" => "C7", "Fname" => "Veron", "Lname" => "Dalisay", "ContactNo" => "096129031", "EmailAddress" => "dalisay@gmail.com"),
        array("ClientID" => "C8", "Fname" => "Mary", "Lname" => "Ina", "ContactNo" => "096129031", "EmailAddress" => "ina@gmail.com"),
        array("ClientID" => "C9", "Fname" => "Margaret", "Lname" => "Rivera", "ContactNo" => "096129031", "EmailAddress" => "rivera@gmail.com"),
        array("ClientID" => "C10", "Fname" => "Richard", "Lname" => "DeVera", "ContactNo" => "096129031", "EmailAddress" => "rich@gmail.com"),  
    );

    if ($ClientID === null) {
        return view('client', compact('clientJPS'));
    }

    $client = array_filter($clientJPS, function ($client) use ($ClientID) {
        return $client['ClientID'] === $ClientID;
    });

    if (!empty($client)) {
        return view('client', compact('client', 'clientJPS'));
    } else {
        $message = "Client not found";
        return view('client', compact('message', 'client'));
    }
}
}
