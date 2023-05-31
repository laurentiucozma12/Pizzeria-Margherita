<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("home");
        // echo 'index';
    }

    // // create() retuneaza view-ul (template-ul)
    // public function create() {
    //     echo 'create';
    // }

    // // store() salveaza user-ul nou
    // public function store(Request $request) {
    //     echo 'store';
    // }

    // // show() afiseaza user-ul, gen returnezi template
    // public function show($id) {
    //     echo 'show';
    // }

    // // edit() returneaza view-ul pentru update
    // public function edit($id) {
    //     echo 'edit';
    // }

    // // update() actualizeaza userul
    // public function update(Request $request, $id) {
    //     echo 'update';
    // }

    // // destroy() sterge
    // public function destroy($id) {
    //     echo 'destroy';
    // }
}