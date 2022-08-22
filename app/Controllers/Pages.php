<?php

namespace App\Controllers;

use Config\Database;

use CodeIgniter\HTTP\Request;

class Pages extends BaseController
{
    private $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
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
        return view('pages/home', $data);
    }
    public function article()
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
        $sql = "select * from t_article where c_active = ?";
        $query1 = $this->db->query($sql, 1)->getResultArray();
        $sql = "select * from t_category";
        $query2 = $this->db->query($sql, 1)->getResultArray();

        $data = [
            'title' => 'dpensiOn || Article',
            'data' => $query2,
            'datarow' => $query1
        ];
        return view('pages/article', $data);
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
        return view('pages/category', $data);
    }
    public function sign_in()
    {
        $data = [
            'title' => 'dpensiOn || Sign In',
            'bodyStyle' => 'bg-body'
        ];
        return view('pages/authentication/sign-in', $data);
    }
    public function sign_up()
    {
        $data = [
            'title' => 'dpensiOn || Sign Up',
            'bodyStyle' => 'bg-body'
        ];
        return view('pages/authentication/sign-up', $data);
    }
}