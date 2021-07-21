<html>

<head>
    <title>Career Test</title>
    <meta name="description" content="Description">

</head>
<?php
$data = array(
    'name' => 'nikhil',
    'email' => 'jnikhil652@gmail.com',
    'password' => '12345678',
    'role' => 1
);
$this->db->select('*');
$this->db->from('users');
$result = $this->db->get()->result();
print_r($result);
?>

</html>