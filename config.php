<?php
$db_creds = array(
  "db" => "ciccs",
  "username" => "ciccs",
  "password" => "95UHVznfhG4hxOnbTWEGtdkrrFFNpbeNYMdzdgsDnsa",
  "host" =>"localhost",
);

function mysqli_run_query($credentials,$query,$return_ans=True){
  $conn = mysqli_connect($credentials["host"], $credentials["username"], $credentials["password"], $credentials["db"]);
  $result = mysqli_query($conn,$query);
  $res = [];
  if($return_ans){
    if(is_bool($result)){
      if($result){return "Query executed correctly.";}else{return "Invalid query.";}
    }
    while($res[] = mysqli_fetch_assoc($result));
    if(count($res)>0){array_pop($res);};
  }
  mysqli_close($conn);
  return $res;
}

function mysqli_run_batched_query($credentials,$queries,$unsafe_batch=False){
  $conn = mysqli_connect($credentials["host"], $credentials["username"], $credentials["password"], $credentials["db"]);
  $results = [];
  if(!is_array($queries)){
    $queries = [$queries];
  }
  foreach($queries as $query){
    if(mysqli_query($conn,$query)===False){
      $results[] = False;
      if(!$unsafe_batch){
        return "$query failed to execute";
      }
    }else{
      $results[] = True;
    }
  }
  mysqli_close($conn);
  return $results;
}

function db_pack($str){
  return base64_encode($str);
}
function db_unpack($str){
  return htmlspecialchars(base64_decode($str));
}

?>
