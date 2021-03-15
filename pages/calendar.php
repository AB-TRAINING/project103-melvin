<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 103</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/calendar-style.css">
    
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h1>My calendar</h1>
                <p>You can see what date it is today, and then browse through months and years.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="border calendar">
                    <h2 class="text-center m-2">
                        <?php
                            $year_to_display = '2021';
                            echo $year_to_display;
                        ?>
                    </h2>
                    <h3 class="text-center m-2">
                        <?php
                            $month_to_display_int = 3;
                            $month_to_display_string = 'March';
                            echo $month_to_display_string;
                        ?>
                    </h3>
                    <div class="m-5">
                        <?php
                            $number_of_days_in_month = date("t");

                            $number_of_weeks = ceil($number_of_days_in_month / 7);

                            for ($current_week=0; $current_week < $number_of_weeks; $current_week++) { 
                        ?>
                            <div class="row">
                                <?php
                                    for ($current_day_of_the_week=0; $current_day_of_the_week < 7; $current_day_of_the_week++) { 
                                        $current_day = $current_week * 7 + $current_day_of_the_week + 1;
                                        if ($current_day <= $number_of_days_in_month) {
                                            ?>
                                                <div class="col border text-center day-box">
                                                    <?php echo $current_day; ?>
                                                </div>
                                            <?php
                                        } else {
                                            ?>
                                                <div class="col border day-box">
                                                </div>
                                            <?php
                                        }
                                    }
                                ?>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<h4><a href="/index.php">Go back Home</a></h4>
</html>
