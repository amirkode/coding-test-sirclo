<?php 

namespace CodingTest\Sirclo\SimpleMVC\Controllers;

use CodingTest\Sirclo\SimpleMVC\Cores\View;
use CodingTest\Sirclo\SimpleMVC\Models\Berat;

class BeratController extends BaseController {

    public function index() {
        $beratData = Berat::all();
        $data = beratAvg($beratData);
        $data->data = $beratData;
        View::render('Index', $data);
    }

    public function show(...$args) {
        $id = $args[0];
        $data = Berat::find($id);
        View::render('Detail', $data);
    }

    public function showCreate() {
        View::render('Create');
    }

    public function showEdit($id) {
        $data = Berat::find($id);
        View::render('Update', $data);
    }

    public function create(...$args) {
        $date = $_POST['date'];
        $max = $_POST['max'];
        $min = $_POST['min'];
        
        Berat::create([
            'date' => $date,
            'max' => $max,
            'min' => $min
        ]);

        View::redirect('/');
    }

    public function update(...$args) {
        $id = $_POST['id'];
        $date = $_POST['date'];
        $max = $_POST['max'];
        $min = $_POST['min'];
        
        Berat::find($id)->update([
            'date' => $date,
            'max' => $max,
            'min' => $min
        ]);

        View::redirect('/data/' . $id);
    }

    public function delete(...$args) {

    }
}