<?php

namespace App\Controllers;

use App\Core\Controller;

class Golongan extends Controller
{

      public function __construct()
      {
            $this->model = new \App\Models\Golongan();
      }

      public function index()
      {
            $data['rows'] = $this->model->all();
            $this->home('golongan/index', $data);
      }

      public function input()
      {
            $this->home('golongan/input');
      }

       public function store()
    {
            $this->model->store();
            header('location:' .  URL . '/golongan');
    }
            
      public function edit($id)
      {
             $data['row'] = $this->model->edit($id);
             $this->home('golongan/edit', $data);
      }

      public function update($id)
      {
            $this->model->update();
            header('location:' .  URL . '/golongan');
      }

      public function delete($id)
      {
             $this->model->delete($id);
             header('location:' .  URL . '/golongan');
      }
}
