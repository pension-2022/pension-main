<?php

namespace App\Controllers;

use Config\Database;

use CodeIgniter\HTTP\Request;

class Pages extends BaseController
{
    private $db;
    private $ionAuth;
    private $session;
    private $privilege;

    public function __construct()
    {
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        $this->privilege = 0;
    }
    public function index()
    {
        if ($this->ionAuth->loggedIn()) {
            $this->privilege = 1;
        }

        $sql = "select tc.i_id as id,tc.n_description as deskripsi from t_category tc
        where tc.c_active = 1 and exists (select ta.i_id from t_article ta
        where ta.i_categoryid = tc.i_id)
        order by tc.i_id desc limit 7";
        $query2 = $this->db->query($sql)->getResultArray();
        $query1 = $this->db->query("select tc.i_id as id,tc.n_description as deskripsi from t_category tc
        where tc.c_active = 1 order by tc.i_id desc limit 6")->getResultArray();
        $sql2 = "select
                    ta.i_id as id,
                    ta.n_title as judul,
                    ta.n_photo as photo,
                    DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
                    tc.n_description as kategori,
                    (
                    select
                        count(*)
                    from
                        t_comment tc2
                    where
                        tc2.i_articleid = ta.i_id) as jumlahkomen
                from
                    t_article ta
                join t_category tc on
                    ta.i_categoryid = tc.i_id
                order by
                    ta.d_created_date desc
                limit 6";
        $queryc = $this->db->query($sql2)->getResultArray();
        $querylc = $this->db->query("select
                                        tc.i_id as id,
                                        tc.n_description as deskripsi
                                    from
                                        t_category tc
                                    where
                                        tc.c_active = 1
                                        and exists (
                                        select
                                            ta.i_id
                                        from
                                            t_article ta
                                        where
                                            ta.i_categoryid = tc.i_id)
                                    order by
                                        tc.i_id desc
                                    limit 4")->getResultArray();
        $queryla = $this->db->query("select
                                        ta.i_id as id,
                                        ta.n_title as judul,
                                        ta.n_photo as photo,
                                        DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
                                        tc.n_description as kategori,
                                        ta.n_description as deskripsi,
                                        (
                                        select
                                            count(*)
                                        from
                                            t_comment tc2
                                        where
                                            tc2.i_articleid = ta.i_id) as jumlahkomen
                                    from
                                        t_article ta
                                    join t_category tc on
                                        ta.i_categoryid = tc.i_id
                                    order by
                                        ta.d_created_date desc
                                    limit 6")->getResultArray();
        $queryfa = $this->db->query("select
                                        n_description as kategori,
                                        i_id as id,
                                        (
                                        select
                                            count(*)
                                        from
                                            t_article ta
                                        where
                                            ta.i_categoryid = tc.i_id and ta.c_active = '1') as artikel
                                    from
                                        t_category tc
                                        order by artikel desc limit 2")->getResultArray();
        $queryfar = $this->db->query("select
                                        ta.i_id as id,
                                        ta.n_photo as photo,
                                        ta.n_title as judul,
                                        DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
                                            tc.n_description as kategori,
                                            ta.n_description as deskripsi,
                                            (
                                            select
                                                count(*)
                                            from
                                                t_comment tc2
                                            where
                                                tc2.i_articleid = ta.i_id) as jumlahkomen,
                                        concat(u.first_name,' ',u.last_name) as author
                                        from
                                            t_article ta
                                        join t_category tc on
                                            ta.i_categoryid = tc.i_id
                                        join users u on
                                            u.id = ta.i_adminid 
                                        order by
                                            jumlahkomen, ta.d_created_date desc
                                        limit 6")->getResultArray();

        $data = [
            'title' => 'dpensiOn || Home',
            'navcategory' => $query2,
            'category' => $query1,
            'carousel' => $queryc,
            'latestcategory' => $querylc,
            'latestarticle' => $queryla,
            'latestarticles' => $queryla,
            'favcategory' => $queryfa,
            'favcategory2' => $queryfa,
            'favarticle' => $queryfar,
            'priv' => $this->privilege,
            'db' => $this->db
        ];
        return view('pages/home', $data);
    }

    public function category($id)
    {
        if ($this->ionAuth->loggedIn()) {
            $this->privilege = 1;
        }
        $sql = "select tc.i_id as id,tc.n_description as deskripsi from t_category tc
        where tc.c_active = 1 and exists (select ta.i_id from t_article ta
        where ta.i_categoryid = tc.i_id)
        order by tc.i_id desc limit 7";
        $query2 = $this->db->query($sql)->getResultArray();
        $query1 = $this->db->query("select tc.i_id as id,tc.n_description as deskripsi from t_category tc
        where tc.c_active = 1 order by tc.i_id desc limit 7")->getResultArray();
        $sql2 = "select
                    ta.i_id as id,
                    ta.n_title as judul,
                    DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
                    tc.n_description as kategori,
                    (
                    select
                        count(*)
                    from
                        t_comment tc2
                    where
                        tc2.i_articleid = ta.i_id) as jumlahkomen
                from
                    t_article ta
                join t_category tc on
                    ta.i_categoryid = tc.i_id
                order by
                    ta.d_created_date desc
                limit 6";
        $queryc = $this->db->query($sql2)->getResultArray();
        $querylc = $this->db->query("select
                                        tc.i_id as id,
                                        tc.n_description as deskripsi
                                    from
                                        t_category tc
                                    where
                                        tc.c_active = 1
                                        and exists (
                                        select
                                            ta.i_id
                                        from
                                            t_article ta
                                        where
                                            ta.i_categoryid = tc.i_id)
                                    order by
                                        tc.i_id desc
                                    limit 4")->getResultArray();
        $queryla = $this->db->query("select
                                        ta.i_id as id,
                                        ta.n_title as judul,
                                        DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
                                        tc.n_description as kategori,
                                        ta.n_description as deskripsi,
                                        (
                                        select
                                            count(*)
                                        from
                                            t_comment tc2
                                        where
                                            tc2.i_articleid = ta.i_id) as jumlahkomen
                                    from
                                        t_article ta
                                    join t_category tc on
                                        ta.i_categoryid = tc.i_id
                                    order by
                                        ta.d_created_date desc
                                    limit 6")->getResultArray();
        $queryfa = $this->db->query("select
                                        n_description as kategori,
                                        i_id as id,
                                        (
                                        select
                                            count(*)
                                        from
                                            t_article ta
                                        where
                                            ta.i_categoryid = tc.i_id and ta.c_active = '1') as artikel
                                    from
                                        t_category tc
                                        order by artikel desc limit 2")->getResultArray();
        $queryfar = $this->db->query("select
                                        ta.i_id as id,
                                        ta.n_title as judul,
                                        ta.n_photo as photo,
                                        DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
                                            tc.n_description as kategori,
                                            ta.n_description as deskripsi,
                                            (
                                            select
                                                count(*)
                                            from
                                                t_comment tc2
                                            where
                                                tc2.i_articleid = ta.i_id) as jumlahkomen,
                                        concat(u.first_name,' ',u.last_name) as author
                                        from
                                            t_article ta
                                        join t_category tc on
                                            ta.i_categoryid = tc.i_id
                                        join users u on
                                            u.id = ta.i_adminid 
                                        order by
                                            jumlahkomen, ta.d_created_date desc
                                        limit 6")->getResultArray();
        $getCategory = $this->db->query("select * from t_category where i_id = ?", $id)->getResultArray();
        $data = [
            'title' => 'dpensiOn || Category',
            'navcategory' => $query2,
            'category' => $query1,
            'carousel' => $queryc,
            'latestcategory' => $querylc,
            'latestarticle' => $queryla,
            'latestarticles' => $queryla,
            'favcategory' => $queryfa,
            'favcategory2' => $queryfa,
            'favarticle' => $queryfar,
            'favarticle2' => $queryfar,
            'mainCategory' => $getCategory,
            'priv' => $this->privilege,
            'db' => $this->db
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