<?php

    class Team{
        function generate_team(int $n_rows, int $n_cols){
        
            $n_team_img = 1;
            $n_team_name = 0;
            $team_name = array("Jimmy Doe", "Marry Doe", "Simon Joe");
    
    
            for($i = 0; $i<$n_rows;$i++){
                echo('<div class="row">');
                //sem pôjde cyklus po stĺpcoch
                for($j = 0; $j<$n_cols;$j++){
                    echo('<div class="col-lg-4 col-md-6">');
                    echo('<div class="single-team-item">');
                    echo('<div class="team-bg team-bg-'.$n_team_img.'"></div>');
                    echo('<h4>'.$team_name[$n_team_name].'<span>Farmer</span></h4>');
                    echo('<ul class="social-link-team">');
                    echo('<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>');
                    echo('<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>');
                    echo('<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>');
                    echo('</ul>');
                    echo('</div>');
                    echo('</div>');
                
                    $n_team_img++;
                    $n_team_name++;
                }
                echo('</div>');
                
            }   
        } 
    }
?>