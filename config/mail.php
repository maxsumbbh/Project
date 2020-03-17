<?php
return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "8a76b670f2cda7",
  "password" => "4f4d041de37d4d",
  "sendmail" => "/usr/sbin/sendmail -bs"
];