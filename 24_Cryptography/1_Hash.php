<?php
// Hashing
echo md5("Let There be Light");
echo "\n";

echo sha1("Let There be Light");
echo "\n";

// print_r(hash_algos());

echo hash("sha1", "Let There be Light");
echo "\n";

echo bin2hex(mhash(MHASH_SHA512,"Let There be Light"));
echo "\n";
echo "\n";


$md5 = md5( "Some Text" );
$sha1 = sha1( "Some Text" );
$sha2 = bin2hex( mhash( MHASH_MD5, "Some Text" ) );

printf( "MD5  = %s\nSHA1 = %s\nSHA2 = %s", $md5, $sha1, $sha2 );
echo "\n";


$password = "My Secret Password";
$hash =  password_hash($password,PASSWORD_BCRYPT,['cost'=>'10']);
echo password_verify($password,$hash);