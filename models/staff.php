<?php
require_once('connection.php');
class Staff
{
    public $MaNV;
    public $CMND;
    public $HoTen;
    public $DiaChi;
    public $GioiTinh;
    public $NgaySinh;
    public $LoaiNV;
    public $ViTri;
    public $MaCN;
    public $init=0;

    public function __construct($MaNV, $CMND, $HoTen, $DiaChi, $GioiTinh, $NgaySinh, $LoaiNV, $ViTri, $MaCN, $init)
    {
        $this->MaNV = $MaNV;
        $this->CMND = $CMND;
        $this->HoTen = $HoTen;
        $this->DiaChi = $DiaChi;
        $this->GioiTinh = $GioiTinh;
        $this->NgaySinh = $NgaySinh;
        $this->LoaiNV = $LoaiNV;
        $this->ViTri = $ViTri;
        $this->MaCN = $MaCN;
        $this->init = $init;
    }

    static function insert($username, $password)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query("INSERT INTO admin (username, password, init, createAt, updateAt) VALUES ('$username', '$password', 0, NOW(), NOW());");
        return $req;
    }

    static function getInit($username){
        $db = DB::getInstance();
        $req = $db->query("CALL `select_init_admin`('$username')");
        $result = $req->fetch_assoc();
        return $result['init'];
    }


    static function delete($username)
    {
        $db = DB::getInstance();
        $req = $db->query("CALL `delete_admin`('$username')");
        return $req;
    }

    static function validation($username, $password)
    {
        $db = DB::getInstance();
        $req = $db->query("CALL `validate_admin`('$username')");
        if (@password_verify($password, $req->fetch_assoc()['password']))
            return true;
        else
            return false;
    }

    static function changePassword($username, $oldpassword, $newpassword)
    {
        if (Admin::validation($username, $oldpassword)) {
            $password = password_hash($newpassword, PASSWORD_DEFAULT);
            $db = DB::getInstance();
            $req = $db->query(
                "CALL `change_pass_admin`('$username, $password')"
            );
            return $req;
        } else {
            return false;
        }
    }

    static function changePassword_($username, $newpassword)
    {
        $password = password_hash($newpassword, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query(
            "CALL `change_pass_admin`('$username, $password')"
        );
        return $req;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM admin");
        $admins = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $admin) {
            $admins[] = new Admin(
                $admin['username'],
                $admin['password'],
                $admin['createAt'],
                $admin['updateAt'],
                $admin['init']
            );
        }
        return $admins;
    }
}
