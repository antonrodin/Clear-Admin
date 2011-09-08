<?php
/**
 * Installation model
 * @author Anton Zekeriev Rodin
 */
class Install_model extends CI_Model {
    
    public function  __construct() {}

    public function set_tables() {

        $query = '
            CREATE TABLE IF NOT EXISTS `users` (
                `id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
                 `username` VARCHAR( 25 ) NOT NULL ,
                 `password` VARCHAR( 32 ) NOT NULL ,
                 `email_address` VARCHAR( 50 ) NOT NULL ,
                PRIMARY KEY (  `id` ) ,
                UNIQUE KEY  `email_address` (  `email_address` ) ,
                UNIQUE KEY  `username` (  `username` )
            ) ENGINE = MYISAM DEFAULT CHARSET = utf8;
            ';
        $this->db->query($query);

    }

    public function set_users() {

        for ($i=1; $i<100; $i++) {
            $insert_data = array(
                'username' => 'root' . $i,
                'password' => md5('1234'),
                'email_address' => 'email' . $i . '@root.com'
            );
            $this->db->insert('users', $insert_data);
        }

    }

}
?>
