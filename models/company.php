<?php
require_once('connection.php');
class Company
{
    public $id;
    public $name;
    public $area;
    public $address;
    public $email;
    public $fax;
    public $mgr_ssn;


    public function __construct($id, $name, $area ,$address, $email, $fax, $mgr_ssn )
    {
        $this->id = $id;
        $this->name = $name;
        $this->area = $area;
        $this->address = $address;
        $this->email = $email;
        $this->fax = $fax;
        $this->mgr_ssn = $mgr_ssn;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM chinhanh");
        $companies = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $company) {
            $companies[] = new Company(
                $company['MaCN'],
                $company['TenCN'],
                $company['KhuVuc'],
                $company['DiaChi'],
                $company['Email'],
                $company['Fax'],
                $company['MaNVQL']

            );
        }
        return $companies;
    }

    static function get($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM chinhanh WHERE id = $id");
        $result = $req->fetch_assoc();
        $company = new Company(
            $result['id'],
            $result['name'],
            $result['area'],
            $result['address'],
            $result['email'],
            $result['fax'],
            $result['mgr_ssn']
        );
        return $company;
    }

    static function insert($name, $address)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO chinhanh (name, area, address, email, fax, mgr_ssn)
            VALUES ('$name', '$address', NOW(), NOW())
            ;"
        );
        return $req;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM chinhanh WHERE id = $id;");
        return $req;
    }

    static function update($id, $name, $address)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE chinhanh SET name = '$name', address = '$address', updateAt = NOW() WHERE id = $id;");
        return $req;
    }
}