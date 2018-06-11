<?php
class RoomDetail{
  private $_roomID;
  private $_roomDes;
  private $_roomType;
  private $_roomPrice;
  private $_roomStatus;
  private $_roomImage;

  public function setRoomID($roomID)
  {
    $this->_roomID = $roomID;
  }
  public function setRoomSize($roomDes)
  {
    $this->_roomDes = $_roomDes;
  }
  public function setRoomPrice($roomType)
  {
    $this->_roomType = $roomType;
  }
  public function setRoomEdate($roomPrice)
  {
    $this->_roomPrice = $roomPrice;
  }
  public function setRoomStatus($roomStatus)
  {
    $this->_roomStatus= $roomStatus;
  }
  public function setRoomImage($roomImage)
  {
    $this->_roomImage= $roomImage;
  }

  public function getRoomID()
  {
    return $this->_roomID;
  }
  public function getRoomDes()
  {
    return $this->_roomDes;
  }
  public function getRoomType()
  {
    return $this->_roomType;
  }
  public function getRoomPrice()
  {
    return $this->_roomPrice;
  }
  public function getRoomStatus()
  {
    return $this->_roomStatus;
  }
  public function getRoomImage()
  {
    return $this->_roomImage;
  }

  public function __construct($roomID,$roomDes,$roomType,$roomPrice,$roomStatus,$roomImage)
  {

      $this->_roomID = $roomID;
      $this->_roomDes = $roomDes;
      $this->_roomType = $roomType;
      $this->_roomPrice = $roomPrice;
      $this->_roomStatus =  $roomStatus;
      $this->_roomImage = $roomImage;

  }

  public function addRoom($conn)
  {
    $sql = "INSERT INTO RoomDetail
              (roomNumber, roomDes, roomType, roomPrice, roomStatus, roomImage)
              VALUES
              ('".$this->_roomID."','".$this->_roomDes."','".$this->_roomType."','".$this->_roomPrice."','".$this->_roomStatus."','')";
    $conn->query($sql) or die($sql."<br>".$conn->error);
    echo "<script>alert('Room Added');window.location='roomlist-page.php'</script>";
  }

  public function getListRoom($conn)
  {

      $sql = "SELECT * FROM RoomDetail  ";
      $rs = $conn->query($sql) or die($sql."<br>".$conn->error);

      $tempArr = array();

      while ($data = $rs->fetch_array()) {

          $room = new RoomDetail($data['roomNumber'],$data['roomDes'],$data['roomType'],$data['roomPrice'],$data['roomStatus'],'');
          array_push($tempArr,$room);
      }

      return $tempArr;
  }

  public function updateRoom($conn) {
    $sql = "UPDATE RoomDetail
              SET
              roomDes = '".$this->_roomDes."', roomPrice = '".$this->_roomPrice."', roomStatus = '".$this->_roomStatus."'WHERE roomNumber = '".$this->_roomID."'";
    $conn->query($sql) or die($sql."<br>".$conn->error);
    echo "<script>alert('Room Update complete.');window.location='roomlist-page.php'</script>";

  }

  public function getRoomById($conn,$roomid)
  {
    $sql = "SELECT * FROM RoomDetail WHERE roomNumber = '".$roomid."'";
    $rs = $conn->query($sql) or die($sql."<br>".$conn->error);

    $data = $rs->fetch_array();

    $this->_roomID = $data['roomNumber'];
    $this->_roomDes = $data['roomDes'];
    $this->_roomType = $data['roomType'];
    $this->_roomPrice = $data['roomPrice'];
    $this->_roomStatus =  $data['roomStatus'];
    $this->_roomImage = $data['roomImage'];

  }

  public function deleteRoom($conn) {
    $sql = "DELETE FROM RoomDetail WHERE roomNumber = '".$this->_roomID."'";
    $conn->query($sql) or die($sql."<br>".$conn->error);
    echo "<script>alert('Delete Room complete.');window.location='roomlist-page.php'</script>";

  }


}


?>
