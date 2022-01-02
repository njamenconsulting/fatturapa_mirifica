<?php

namespace App\Repositories;
use App\Models\Invoice;

interface InvoiceRepositoryInterface
{
    public function store($data);
    public function get($id);
}