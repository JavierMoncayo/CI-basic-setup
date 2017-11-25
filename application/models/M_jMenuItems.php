class M_jMenuItems extends CI_Model {

  public function __construct () {
    parent::__construct ();
  }

  /**
   * Get items in main menu depending of user access permision.
   * @param int $access Default access set to "public".
   * @return  Array of objects.
   */
  public function mGetMenuItems ( $access = 0 ) {
    $sql = "SELECT * FROM jMenuItems WHERE accessItem < $access ORDER BY itemPosition ASC";
    return $this->db->query ($sql)->result();
  }

}

