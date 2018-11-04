<?php


class Home extends Controller
{
    public function index()
    {
        $result = null;
        if (!empty($_POST)) {

            $first = floatval(!empty($_POST['first']) ? $_POST['first'] : 0);
            $second = floatval(!empty($_POST['second']) ? $_POST['second'] : 0);
            $operation = !empty($_POST['operation']) ? $_POST['operation'] : '';
            $result = Calculation::calculate($first, $second, $operation);
        }

        $this->view('home/index', [
            'result' => $result,
            'first' => $first,
            'second' => $second
        ]);

    }

}