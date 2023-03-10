<?php

namespace App\Interfaces;

interface CategoryServiceInterface
{
    public function getAll();

    public function createCategory($request);

    public function updateCategory($Category, $request);

    public function findCategoryWithConditions($column, $operator = null, $value = null);

    public function findCategoriesWithConditions($column, $operator = null, $value = null);
}
