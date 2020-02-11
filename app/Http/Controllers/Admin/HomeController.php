<?php

namespace App\Http\Controllers\Admin;
use App\Service;
use App\Client;
use App\Appointment;
use App\Employee;
use Carbon\Carbon;

class HomeController
{
    private $data = [];
    
    public function index()
    {
        $faturamento = Appointment::sum('price');
        $faturamento = number_format($faturamento,2,",",".");
        $servicos = Service::all();
        $clientes = Client::all();
        $funcionarios = Employee::all();
        $compromissos = Appointment::all();

        return view('home', compact(
            'servicos', 'clientes', 'faturamento', 'funcionarios', 'compromissos'
        ));
    }

    public function chartJs()
    {
        $this->data['servicos'] = Service::all();
        return json_encode($this->data);
    }
}
