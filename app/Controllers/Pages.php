<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Pages extends BaseController
{
    public function index()
    {
        // CAROUSEL
        // select from article order by count comment desc limit 3

        // LATEST FROM CATEGORIES
        // select id, name from category order by date desc limit 4

        // TODAYS NEWS TREND
        // select from article order by count comment desc limit 6 join count comment

        // BY CATEGORY
        // select article where id category = first id join count comment
        // select article where id category = last id join count comment
        // select id, name from category 

        // READ THE LATEST ARTICLE
        // select from article order by date desc limit 6 join count comment join name category

        $data = [
            'title' => 'dpensiOn || Home'
        ];
        return view('pages/index', $data);
    }
    public function detail()
    {
        // DETAIL
        // select from article where id = $request->id join name category join count comment
        // select from comment where id article = $request->id

        // CATEGORIES
        // select id, name from category

        // POPULAR NEWS 
        // select from article order by count comment desc limit 4 join name category join count comment

        // RELATED POST
        // select from article order by count comment desc limit 4 join name category join count comment

        $data = [
            'title' => 'dpensiOn || Article'
        ];
        return view('pages/article/detail', $data);
    }
    public function category()
    {
        // CAROUSEL
        // select from article where id category = $requset->id order by count comment desc join comment count

        // DETAIL
        // select from article where id category = $requset->id order by date desc join name category join comment count

        // CATEGORIES
        // select id, name from category

        // POPULAR NEWS 
        // select from article order by count comment desc limit 4 join name category join count comment

        $data = [
            'title' => 'dpensiOn || Category'
        ];
        return view('pages/article/category', $data);
    }
}