<?php
namespace database_connection;
class get{
  public function host  ()  { return 'localhost';}
  public function user  ()  { return 'root';}
  public function pass  ()  { return 'root';}
  public function db    ()  { return 'jazire';}
  public function arr   ()  {
                              return array(
                                'host'      =>'localhost',
                                'user'      =>'root',
                                'pass'      =>'root',
                                'database'  =>'jazire'
                              );

  }
}
