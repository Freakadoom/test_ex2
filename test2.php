<?php
    $N = $_POST['N'];
    $M = $_POST['M'];
    $countComment = 0;

    if( $N >= 0 && $M <= 1000 ){
       if( $N % 2 != 0 && $M == 0 ){
           $countComment = -1;
           echo $countComment;
       }else{
           if(  $N % 2 != 0 ){
              if( $M % 2 == 0 && ($M/2) % 2 != 0 ){
              }else{
                   while(  true  ):
                       $M++;
                       $countComment++;
                       if( ($M/2) % 2 != 0){  
                           break;
                       }  
                   endwhile;
              } 
           }elseif(  $N % 2 == 0 ){
               if( $M % 2 == 0 && ($M/2) % 2 == 0 ){
               }else{
                    while(  true  ):
                        $M++;
                        $countComment++;
                        if( ($M/2) % 2 == 0){  
                            break;
                        }  
                    endwhile;
                }
           }
           $M = $M / 2;
           $countComment = $countComment + $M;
           $N = $N + $M;
           $countComment = $countComment + $N / 2;
           echo $countComment;
       }
    }else{
        echo "Введенное число не входит в указанный диапазон значений!";
    }

   