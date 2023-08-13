<?php
require_once('connection.php');
class Product
{
    public $MaTour;
    public $TenTour;
    public $Anh;
    public $NgayBatDau;
    public $SoKhachTourToiThieu;
    public $SoKhachTourToiDa;
    public $GiaVeLeNguoiLon;
    public $GiaVeLeTreEm;
    public $GiaVeDoanNguoiLon;
    public $GiaVeDoanTreEm;
    public $SoKhachDoanToiThieu;
    public $SoDem;
    public $SoNgay;
    public $MaCN;

    public function __construct($MaTour, $TenTour, $Anh, $NgayBatDau, $SoKhachTourToiThieu, 
$SoKhachTourToiDa, $GiaVeLeNguoiLon, $GiaVeLeTreEm, $GiaVeDoanNguoiLon, $GiaVeDoanTreEm, $SoKhachDoanToiThieu, $SoDem, $SoNgay, $MaCN)
    {
        $this->MaTour = $MaTour;
        $this->TenTour = $TenTour;
        $this->Anh = $Anh;
        $this->NgayBatDau = $NgayBatDau;
        $this->SoKhachTourToiThieu = $SoKhachTourToiThieu;
        $this->SoKhachTourToiDa = $SoKhachTourToiDa;
        $this->GiaVeLeNguoiLon = $GiaVeLeNguoiLon;
        $this->GiaVeLeTreEm = $GiaVeLeTreEm;
        $this->GiaVeDoanNguoiLon = $GiaVeDoanNguoiLon;
        $this->GiaVeDoanTreEm = $GiaVeDoanTreEm;
        $this->SoKhachDoanToiThieu = $SoKhachDoanToiThieu;
        $this->SoDem = $SoDem;
        $this->SoNgay = $SoNgay;
        $this->MaCN = $MaCN;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM tour");
        $products = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $product)
        {
            $products[] = new Product(
                $product['MaTour'],
                $product['TenTour'],
                $product['Anh'],
                $product['NgayBatDau'],
                $product['SoKhachTourToiThieu'],
                $product['SoKhachTourToiDa'],
                $product['GiaVeLeNguoiLon'],
                $product['GiaVeLeTreEm'],
                $product['GiaVeDoanNguoiLon'],
                $product['GiaVeDoanTreEm'],
                $product['SoKhachDoanToiThieu'],
                $product['SoDem'],
                $product['SoNgay'],
                $product['MaCN']
            );
        }
        return $products;
    }

    static function get($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM tour WHERE MaTour = '$id'");
        $result = $req->fetch_assoc();
        $product = new Product(
            $result['MaTour'],
            $result['TenTour'],
            $result['Anh'],
            $result['NgayBatDau'],
            $result['SoKhachTourToiThieu'],
            $result['SoKhachTourToiDa'],
            $result['GiaVeLeNguoiLon'],
            $result['GiaVeLeTreEm'],
            $result['GiaVeDoanNguoiLon'],
            $result['GiaVeDoanTreEm'],
            $result['SoKhachDoanToiThieu'],
            $result['SoDem'],
            $result['SoNgay'],
            $result['MaCN']
        );
        return $product;
    }

    static function insert($MaTour, $TenTour, $Anh, $NgayBatDau, $SoKhachTourToiThieu, 
    $SoKhachTourToiDa, $GiaVeLeNguoiLon, $GiaVeLeTreEm, $GiaVeDoanNguoiLon, $GiaVeDoanTreEm, $SoKhachDoanToiThieu, $SoDem, $SoNgay, $MaCN)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "INSERT INTO `tour` (`MaTour`, `TenTour`, `Anh`, `NgayBatDau`, `SoKhachTourToiThieu`, `SoKhachTourToiDa`, 
            `GiaVeLeNguoiLon`, `GiaVeLeTreEm`, `GiaVeDoanNguoiLon`, `GiaVeDoanTreEm`, `SoKhachDoanToiThieu`, `SoDem`, `SoNgay`, `MaCN`) 
            VALUES ('$MaTour', '$TenTour', '$Anh', '$NgayBatDau', '$SoKhachTourToiThieu', '$SoKhachTourToiDa', '$GiaVeLeNguoiLon', 
            '$GiaVeLeTreEm', '$GiaVeDoanNguoiLon', '$GiaVeDoanTreEm', '$SoKhachDoanToiThieu', 
            '$SoDem', '$SoNgay', '$MaCN');");
        return $req;
    }

    static function delete($MaTour)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM tour WHERE MaTour = '$MaTour'");
        return $req;
    }

    static function update($MaTour, $TenTour, $Anh, $NgayBatDau, $SoKhachTourToiThieu, 
    $SoKhachTourToiDa, $GiaVeLeNguoiLon, $GiaVeLeTreEm, $GiaVeDoanNguoiLon, $GiaVeDoanTreEm, $SoKhachDoanToiThieu, $SoDem, $SoNgay, $MaCN)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
                UPDATE `tour`
                SET `MaTour` = '$MaTour', `TenTour` = '$TenTour', `Anh` = '$Anh', `NgayBatDau` = '$NgayBatDau', `SoKhachTourToiThieu` = '$SoKhachTourToiThieu',
                `SoKhachTourToiDa` = '$SoKhachTourToiDa', `GiaVeLeNguoiLon` = '$GiaVeLeNguoiLon', `GiaVeLeTreEm` = '$GiaVeLeTreEm', `GiaVeDoanNguoiLon` = '$GiaVeDoanNguoiLon', `GiaVeDoanTreEm` = '$GiaVeDoanTreEm',
                `SoDem` = '$SoDem', `SoNgay` = '$SoNgay', `MaCN` = '$MaCN'
                WHERE `MaTour` = '$MaTour'
            ;");
    }
}
?>