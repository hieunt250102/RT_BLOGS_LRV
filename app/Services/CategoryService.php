<?php

namespace App\Services;

use App\Interfaces\CategoryServiceInterface;
use App\Models\Category;

class CategoryService implements CategoryServiceInterface
{
    public function getAll()
    {
        return Category::all();
    }

    public function createCategory($request)
    {
        return Category::create([
            'title' => $request['title'],
        ]);
    }


    public function findCategoryWithConditions($column, $operator = null, $value = null)
    {
        return  Category::where($column, $operator, $value)->first();
    }

    public function findCategoriesWithConditions($column, $operator = null, $value = null)
    {
        return  Category::where($column, $operator, $value)->get();
    }

    public function updateCategory($id, $request)
    {
        $category = $this->findCategoryWithConditions('id', $id);
        if ($category) {
            $category->update($request);
            return $category;
        }

        return false;
    }

    public function deleteCategory($id)
    {
        $category = $this->findCategoryWithConditions('id', $id);

        if ($category) {
            $category->delete();
            return true;
        }

        return false;
    }
}
