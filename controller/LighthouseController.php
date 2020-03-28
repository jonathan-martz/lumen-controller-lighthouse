<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LighthouseController extends Controller
{

    public function collection()
    {
        $validation = $this->validate($this->request, []);

        $this->addData('results', ['test' => 'konalo']);

        return $this->getResponse();
    }

    public function view()
    {
        $validation = $this->validate($this->request, []);

        $this->addData('results', ['test' => 'konalo123']);

        return $this->getResponse();
    }

    public function rankingTopic()
    {
        $validation = $this->validate($this->request, []);

        $this->addData('results', ['test' => 'konalo3']);

        return $this->getResponse();
    }

    public function rankingCountry()
    {
        $validation = $this->validate($this->request, []);

        $this->addData('results', ['test' => 'konalo2']);

        return $this->getResponse();
    }

    public function ranking()
    {
        $validation = $this->validate($this->request, []);

        $this->addData('results', ['test' => 'konalo1']);

        return $this->getResponse();
    }
}
