<?php
	$karakterea = $_POST['karakterea'];
    echo $karakterea;
        if($karakterea != "a"){
            if($karakterea != "e"){
                if($karakterea != "i"){
                    if($karakterea != "o"){
                        if($karakterea != "u"){
                            print "Konsonantea da";
                        }else{
                            print "Bokala da";
                        }
                    }else{
                        print "Bokala da";
                    }
                }else{
                    print "Bokala da";
                }
            }else{
                print "Bokala    da";
            }
        }else{
            print "Bokala da";
        }
    ?>
    
    <!-- <?php
        $karakterea = $_POST['karakterea'];
    echo $karakterea;
        if(preg_match("/[A-Z]/", $karakterea) == 1){
            print "Letra larria da";
        }else if (preg_match("/[a-z]/", $karakterea) == 1){
            print "Ez da letra larria";
        }else {
            print "Ez da izkia.";
        }
    ?> -->
    
    <!-- <?php
        $soldata = $_POST['soldata'];
        $guztira;
        if($soldata < 1000){
            $guztira = ($soldata * 0.1);
            print $guztira;
        }else if($soldata == 1000){
            $guztira = ($soldata * 0.12);
            print $guztira;
        }else if($soldata > 1000){
            $guztira = ($soldata * 0.14);
            print $guztira;
        }
    ?>-->